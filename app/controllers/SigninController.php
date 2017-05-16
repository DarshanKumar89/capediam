<?php
/*
*  2015 Slaty Site
*
*  NOTICE OF LICENSE
*
*  @author     Slaty Fork s.r.o. //-- Henrich Barkoczy  <henrich.barkoczy@slatyfork.eu>
*  @copyright  Slaty Fork s.r.o.
*  @license    http://www.slatyfork.cz - Software License
*/

class SigninController {
  
  /** KERNEL SECURE LEVELS **/
  
  const SECURE_BASE = 3;
  
  const SECURE_MIDDLE = 5;
  
  const SECURE_HIGHLY = 9;
  
  /** SECURE CRYPTO COST **/
  
  const SECURE_CRYPTO_COST = 11;
  
  /** INPUT SECURE **/
  
  const INPUT_EMAIL_L = 'b3bf12c99dac16964a6c9d061d42e929';
 
  const INPUT_PASS_L = 'a73cbbedc084e09dcbc2597b4447e2e0';
  
  const INPUT_EMAIL_R = '0e1febcce9864f3745de782f5e6e4606';
 
  const INPUT_PASS_R = '1d3870847a37a8956aad0e059036d1fe';
  
  /** @var Registry **/
  protected static $registry;
  
  /** @var string **/
  private static $salt = "53d714196d6e705da78ee4361a258ee0";
  
  /** @var array **/
  private static $options;
  
  /** @var string **/
  private static $salt1;
  
  /** @var string **/
  private static $salt2;
  
  /** @var array **/
  private $status;
  
  /** @var array **/
  private static $err;
  
  public function __construct( Registry $registry ) 
  {
    self::$registry = $registry;
    self::$options  = array(
      'cost' => self::SECURE_CRYPTO_COST,
      'salt' => self::$salt
    );
    self::$salt1 = $this->__salt();
    self::$salt2 = $this->__salt();
    // template
    self::$registry->getService('template')->assign('INPUT_EMAIL_L',self::INPUT_EMAIL_L);
    self::$registry->getService('template')->assign('INPUT_PASS_L',self::INPUT_PASS_L);
    self::$registry->getService('template')->assign('INPUT_EMAIL_R',self::INPUT_EMAIL_R);
    self::$registry->getService('template')->assign('INPUT_PASS_R',self::INPUT_PASS_R);
  }
  
  public function run()
  { 
    self::$registry->getService('template')->assign('sec',0);
    self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/login_register.tpl|footer.tpl');
  }
  
  public function login()
  {
    if(self::$registry->getService('irequest')->isPost()) {
      $form  = self::$registry->getService('irequest')->getPost();
      $email = (string) $form[ self::INPUT_EMAIL_L ];
      $pass  = (string) $form[ self::INPUT_PASS_L ];
      
      // check value vars
      if(empty($email)) {
        self::$err[] = "Email je povinný.";
      }
      if(empty($pass) && (strlen($pass) < 6)) {
        self::$err[] = "Heslo je povinné.";
      }
      if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        self::$err[] = "Email nie je v správnom tvare.";
      }
      // if error
      if(count(self::$err) === 0) {
        if(self::$registry->getService('store')->isUserByAuthEmail( $email )) {
          $userId = self::$registry->getService('store')->userIdByAuthEmail( $email );
          $scPdat = self::$registry->getService('store')->scPdatByUserId( $userId );

          if(!is_null($scPdat) && !is_null($scPdat->ca)) {
            $crypto = $this->__reverse_acrypto( 
              $scPdat->ca, 
              $scPdat->salt1,
              $scPdat->salt2,
              $this->__cutString($pass,0,$scPdat->cta),
              $this->__cutString($pass,$scPdat->cta,(strlen($pass) - ($scPdat->cta + $scPdat->ctb))),
              $this->__cutString($pass,(strlen($pass) - $scPdat->ctb),$scPdat->ctb)
            );
            if(password_verify($crypto, self::$registry->getService('store')->cPassByUserId( $userId ))) {
              if(self::$registry->getService('store')->setLoginUserStatus( 1, 0, $userId )) {
                self::$registry->getService('cookie')->set(
                  'st',
                  self::$registry->getService('store')->secureKeyByUserId( $userId ),
                  (time()+3600 * 24 * 365)
                );
                $sToken = self::$registry->getService('hash')->ripemd128(
                  self::$registry->getService('irequest')->getRemoteAddress()      .
                  self::$registry->getService('geoip')->getVisitor()->countryCode  .
                  self::$registry->getService('idetector')->detect()->full         .
                  self::$registry->getService('cookie')->get('st')
                );
                if(self::$registry->getService('store')->updateSecureTokenByUserId( $sToken, $userId )) {
                  self::$registry->getService('irequest')->movePage(301,'');
                } else {
                  self::$err[] = "STOP ERROR: #454f455. NASTALA SYSTEMOVA CHYBA PROSIM KONTAKTUJTE SPRAVCU.";
                  self::$registry->getService('template')->assign('err',self::$err);
                  self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/login_register.tpl|footer.tpl');
                }
              } else {
                self::$err[] = "NASTALA SYSTEMOVA CHYBA PROSIM KONTAKTUJTE SPRAVCU.";
                self::$registry->getService('template')->assign('err',self::$err);
                self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/login_register.tpl|footer.tpl');
              } 
            } else {
              self::$err[] = "Nesprávne heslo alebo email.";
              self::$registry->getService('template')->assign('err',self::$err);
              self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/login_register.tpl|footer.tpl');
            }
          } else {
            self::$err[] = "Nesprávne heslo alebo email.";
            self::$registry->getService('template')->assign('err',self::$err);
            self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/login_register.tpl|footer.tpl');
          }
        } else {
          self::$err[] = "Nesprávne heslo alebo email.";
          self::$registry->getService('template')->assign('err',self::$err);
          self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/login_register.tpl|footer.tpl');
        }
      } else {
        self::$registry->getService('template')->assign('err',self::$err);
        self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/login_register.tpl|footer.tpl');
      }
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  public function logout()
  {
    if(self::$registry->getService('store')->setLoginUserStatus( 0, 0, self::$registry->getService('controller')->getUserId() )) {
      self::$registry->getService('irequest')->movePage(301,'');
    } else {
      echo 'ERROR';
    }
  }
  
  public function register()
  {  
    if(self::$registry->getService('irequest')->isPost()) {
      $form = self::$registry->getService('irequest')->getPost();
      $userId = self::$registry->getService('controller')->getUserId();
      
      if( (isset($form[ self::INPUT_EMAIL_R ]) && !empty( $form[ self::INPUT_EMAIL_R ] ) && is_string( $form[ self::INPUT_EMAIL_R ] )) &&
          (isset($form[ self::INPUT_PASS_R ]) && is_string( $form[ self::INPUT_PASS_R ] ))   
      ) {
        if(!$this->__checkUserEmail( $form[ self::INPUT_EMAIL_R ] )) {
          self::$err[] = "EMAIL NIE JE SPRÁVNOM TVARE ALEBO NIE JE UNIKATNY.";
        }
        if(empty($form[ self::INPUT_PASS_R ]) && (strlen($form[ self::INPUT_PASS_R ]) < 6)) {
          self::$err[] = "HESLO MUSI BYT DLHE MINIMALNE 6 ZNAKOU DLHE.";
        }
        if(self::$registry->getService('store')->isRegistredUserById( $userId )) {
          self::$err[] = "UZ STE REGISTROVANY.";
        }
        if(count(self::$err) === 0) {
          $cPass  = $this->__parsePassword( $form[ self::INPUT_PASS_R ] );
          $CA     = $this->__acrypto( $cPass->start, $cPass->middle, $cPass->stop );
          
          $this->status[] = self::$registry->getService('store')->insertUserAuth(array(
            ':id_user'    => $userId,
            ':id_lang'    => self::$registry->getService('languages')->getCurrentLanguage(),
            ':auth_email' => $form[ self::INPUT_EMAIL_R ],
            ':salt1'      => self::$salt1,
            ':salt2'      => self::$salt2,
            ':cta'        => $cPass->left,
            ':ctb'        => $cPass->right,
            ':pass'       => $this->__crypt( $CA->hash ),
          ));
          foreach($CA->ca as $ca) {
            $this->status[] = self::$registry->getService('store')->insertUserAuthCA(array(
              ':id_user' => $userId,
              ':id_ca'   => $ca
            ));
          }
          if(self::$registry->getService('helper')->checkStatus( $this->status )) {
            if(self::$registry->getService('store')->setLoginUserStatus( 1, 0, $userId )) {
              self::$registry->getService('irequest')->movePage(301,'');
            } else {
              self::$err[] = "NASTALA SYSTEMOVA CHYBA PROSIM KONTAKTUJTE SPRAVCU.";
            } 
          } else {
            self::$err[] = "NASTALA SYSTEMOVA CHYBA PROSIM KONTAKTUJTE SPRAVCU.";
          }
        }
        self::$registry->getService('template')->assign('sec',1);
        self::$registry->getService('template')->assign('err',self::$err);
        self::$registry->getService('template')->assign('INPUT_EMAIL_L',self::INPUT_EMAIL_L);
        self::$registry->getService('template')->assign('INPUT_PASS_L',self::INPUT_PASS_L);
        self::$registry->getService('template')->assign('INPUT_EMAIL_R',self::INPUT_EMAIL_R);
        self::$registry->getService('template')->assign('INPUT_PASS_R',self::INPUT_PASS_R);
        self::$registry->getService('template')->display('extends:layout.tpl|header.tpl|nav.tpl|store/login_register.tpl|footer.tpl');
      } else {
        self::$registry->getService('irequest')->movePage(301,'');
      }
    } else {
      self::$registry->getService('irequest')->movePage(301,'');
    }
  }
  
  private function __checkUserEmail( $email = '' )
  { 
    return (filter_var($email,FILTER_VALIDATE_EMAIL)) ? self::$registry->getService('store')->isUniqueUserAuthEmail( $email ) : false;
  }
  
  private function __parsePassword( $password = '', $left = 0, $rigth = 0 )
  {
    $cutting = $this->__counting( $password, $left = 0, $rigth = 0 );
    
    if(!is_null($cutting->length) && !is_null($cutting->left) && !is_null($cutting->rigth)) {
      return (object) array(
        'length' => $cutting->length,  
        'left'   => $cutting->left,
        'right'  => $cutting->rigth,
        'start'  => $this->__cutString($password,0,$cutting->left),
        'middle' => $this->__cutString($password,$cutting->left,($cutting->length - ($cutting->left + $cutting->rigth))),
        'stop'   => $this->__cutString($password,($cutting->length - $cutting->rigth),$cutting->rigth)
      );
    } else {
      $this->__parsePassword( $password = '', $left = 0, $rigth = 0 );
    }
  }
  
  private function __counting( $string = '', $left = 0, $rigth = 0 )
  {
    $length = strlen($string);
    $left   = ((int) $left !== 0) ? (int) $left : rand(1,($length / 2));
    $rigth  = ((int) $rigth !== 0) ? (int) $rigth : rand(1,($length / 2));
    
    if(($left + $rigth) === $length) {
      $this->__counting( $string, $left = 0, $rigth = 0 );
    } else {
      return (object) array(
        'length' => $length,
        'left'   => $left,
        'rigth'  => $rigth
      );
    }
  }
  
  private function __cutString( $string = '', $start = 0, $stop = 0 )
  {
    return substr($string, $start, $stop);
  }
  
  private function __acrypto( $start = '', $middle = '', $stop = ''  )
  {
    $hash = '';
    $fCpt = [];
    
    for($i=0;$i < self::SECURE_HIGHLY;$i++)
    {
      $cm = $this->__randCa();
      
      if($i === 0) {
        $fCpt[] = $cm;
        $hash = $this->__hash($cm,$start.self::$salt1.$middle.self::$salt2.$stop);
      } else {
        $fCpt[] = $cm;
        $hash = $this->__hash($cm, $hash);
      }
    }
    return (object) array(
      'hash' => $hash,
      'ca'   => $fCpt
    );
  }
  
  private function __reverse_acrypto( $secure = null, $salt1 = '', $salt2 = '', $start = '', $middle = '', $stop = ''  )
  {
    if(is_array($secure) && (count($secure) > 0)) {
      $hash = '';

      foreach($secure as $key => $value) {
        if($key === 0) {
          $hash = $this->__hash((int) $value->id_ca,$start.$salt1.$middle.$salt2.$stop);
        } else {
          $hash = $this->__hash((int) $value->id_ca, $hash);
        }
      }
      return $hash;
    }
    return null;
  }
  
  private function __randCa()
  {
    return rand(1,4);
  }
  
  private function __hash( $ca = 0, $string = '' )
  {
    switch($ca)
    {
      case 1:
        return hash('sha512', $string);
      case 2:
        return hash('ripemd128', $string);
      case 3:
        return hash('whirlpool', $string);
      case 4:
        return hash('gost', $string);
    }
  }
  
  private function __crypt( $password = '' )
  {
    return password_hash($password, PASSWORD_BCRYPT, self::$options);
  }
  
  private function __salt()
  {
    $salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
    $salt = base64_encode($salt);
    $salt = str_replace('+', '.', $salt);

    return $salt;
  }
  
}