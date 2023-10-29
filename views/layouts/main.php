<?php

use app\assets\AppAsset;

use yii\helpers\Html;
use app\models\Login;
use app\components\Uservaludate;

$login_model = new Login();

//$session = Yii::$app->session;

//$email = $session->get('admin');

$isAdmin = false;

$cookies = Yii::$app->request->cookies;



/*if (($cookie = $cookies->get('lang')) == null) {
   $lang = 'ru';
}
else{
    $lang = $cookie->value;
}*/

if(empty(Yii::$app->params['lang'])){
    $lang = Uservaludate::CookieLang();
}
else{
    $lang = Yii::$app->params['lang'];
}

if($lang == 'ru'){
    $main = 'Главная';
    $service = 'Услуги';
    $gallery = 'Галерея';
    $calendar = 'Расписание';
    $article = 'Статьи';
    $contact = 'Контакты';
    $regulations = 'Правила';
    $video = 'Видео';
    $port = 'Портфолио';
}
else{
    $main = 'Peamine';
    $service = 'Teenused';
    $gallery = 'Galerii';
    $calendar = 'Kalender';
    $article = 'Artiklid';
    $contact = 'Kontakt';
    $regulations = 'eeskirjadega';
    $video = 'Video';
    $port = 'Portfolio';
}


if($lang == 'ee'){
    $add = '/ee';
}
else{
    $add = '';
}


////////админ
if (($cookie = $cookies->get('admin')) !== null) {
    $email = $cookie->value;
    $pr_admin = Login::find()->asArray()->where(['username' => $email])->one();
}
if (($cookie = $cookies->get('auth_key')) !== null) {
    $auth_key = $cookie->value;
}




if(!empty($pr_admin)){
    if(strcasecmp($pr_admin['auth_key'], $auth_key) == 0){
    $isAdmin = true;
}
}

$isModerator = false;

/////модератор
if (($cookie = $cookies->get('moderator')) !== null) {
    $email = $cookie->value;
    $pr_moderator = Login::find()->asArray()->where(['username' => $email])->one();
}
if (($cookie = $cookies->get('auth_key')) !== null) {
    $auth_key = $cookie->value;
}


if(!empty($pr_moderator)){
    if(strcasecmp($pr_moderator['auth_key'], $auth_key) == 0){
    $isModerator = true;
}
}



AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="yff5zm2oaM_IAfG7ARFyCbYEnskO4b1jPXs6ZTWWi4g" />
    <title><?= Html::encode($this->title) ?></title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
   <link rel="shortcut icon" href="../web/PAW.ico" type="image/x-icon">
</head>
<body>
   <?php $this->beginBody() ?>

    
    
    
    
    
 
        
        
            <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
          <div id="navbar-brand">
	    <a class="navbar-brand text-white">
        <img src="/web/img/logo/text_PLC.png" style="height:30px;">
	        <!--<span class="fa fa-paw"></span>
	        <span>NameSayt</span>-->
	    </a>
	    </div>
          <button style="border:none;" class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                  <!--<span class="navbar-toggler-icon text-white"></span>-->
                  <div class="menu">
                      <div class="hambergerIcon">
                     </div>
                  </div>
                   <!--<svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="60">
  <path
        class="line top"
        d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
  <path
        class="line middle"
        d="m 70,50 h -40" />
  <path
        class="line bottom"
        d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
</svg>-->
          </button>
      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto ml-3 ml-md-0 mt-5 mt-md-0">
	                <li class="nav-item">
                       <?php if($lang == 'ee'): ?>
	                       <?= Html::a($main,'/ee', ['class' => 'nav-link']) ?>
	                   <?php else: ?>
	                       <?= Html::a($main,'/', ['class' => 'nav-link']) ?>
	                   <?php endif;?>
	                </li>
	                <li class="nav-item">
	                   <?= Html::a($service,'/site/service'.$add, ['class' => 'nav-link']) ?>
	                </li>
	                <li class="nav-item">
	                   <?= Html::a($gallery,'/site/gallery'.$add, ['class' => 'nav-link']) ?>
	                </li>
                  <li class="nav-item">
                     <?= Html::a($video,'/site/video'.$add, ['class' => 'nav-link']) ?>
                  </li>
	                <li class="nav-item">
	                   <?= Html::a($calendar,'/site/calender'.$add, ['class' => 'nav-link']) ?>
	                </li>
	                <li class="nav-item">
	                   <?= Html::a($article,'/site/article'.$add, ['class' => 'nav-link']) ?>
	                </li>
	                <li class="nav-item">
	                    <?= Html::a($regulations,'/site/regulations'.$add, ['class' => 'nav-link']) ?>
	                </li>
	                <li class="nav-item">
	                    <?= Html::a($contact,'/site/contact'.$add, ['class' => 'nav-link']) ?>
	                </li>
                  <li class="nav-item">
                      <?= Html::a($port,'/site/portfolio'.$add, ['class' => 'nav-link']) ?>
                  </li>
	                <li class="nav-item">
	                    <a id="est" style="float:left; cursor:pointer;" class="nav-link ml-1 lang"><img src="/web/img/icon/estonia-flag.png" width="20px;"></a>
	                    <a id="ru" style="float:left; cursor:pointer;" class="nav-link ml-1 lang"><img src="/web/img/icon/russia-flag.png" width="20px;"></a>
	                </li>
	                <li class="nav-item">
	                    
	                    
	                </li>
	                <?php if($isAdmin == true): ?>
	                <li class="nav-item">
	                    <div class="btn-group ml-md-2 mt-2 mt-md-0 d-block">
                          <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 50em;">
                            Добавить
                          </button>
                          <div class="dropdown-menu">
                             <a class="dropdown-item" href="/site/addpost" class="nav-link">Статья</a>
                             <a class="dropdown-item" href="/site/addgallery" class="nav-link">Галерея</a>
                             <a class="dropdown-item" href="/site/addvideo" class="nav-link">Видео</a>
                          </div>
                        </div>
	                </li>
	                <?php endif; ?>
	            </ul>
	            <?php if($isAdmin == true || $pr_moderator == true): ?>
         <a href="/site/logexit" class="nav-link">
    <button class="btn btn-outline-warning form-inline pull-xs-righ" type="submit" style="border-radius: 50em;">Выйти<i class="fa fa-sign-out ml-2" aria-hidden="true"></i></button>
    </a>
     <?php endif; ?>
      </div>
    </nav>
        <div class="modal-menu"></div>
        
        
        
             
                  <?= $content ?>
              
      
    <?php $this->endBody() ?>
   
<footer class="page-footer font-small cyan darken-3">

    
    <div class="container">

     
      <div class="row">

        
        <div class="col-md-12 py-5">
          <div class="mb-5 flex-center">

           
            <a class="fb-ic text-white" href="https://www.facebook.com/PawLeash-Club-312312639350644/?ref=bookmarks">
              <i class="fab fa-facebook-f fa-lg mr-md-5 mr-4 fa-2x"> </i>
            </a>
      
            <a class="tw-ic text-white" href="https://www.facebook.com/messages/t/ekaterina.bulgakova.1840">
              <i class="fab fa-facebook-messenger fa-lg mr-md-5 mr-4 fa-2x"> </i>
            </a>
        
            <a class="skype-ic text-white">
              <i class="fab fa-youtube fa-lg mr-md-5 mr-4 fa-2x"> </i>
            </a>
            
            <a class="whatsapp-ic text-white" href="https://wa.me/37256869123">
              <i class="fab fa-whatsapp fa-lg mr-md-5 mr-4 fa-2x"> </i>
            </a>
           
            <a class="ins-ic text-white" href="https://www.instagram.com/pawleashclub/">
              <i class="fab fa-instagram fa-lg fa-2x"> </i>
            </a>

          </div>
        </div>
       

      </div>


    </div>
                    <?php
                     $now = new DateTime();
                    $current_year = substr($now->format('Y-m-d H:i:s'), 0, 4);
                    ?>
    <div class="footer-copyright text-center py-3">© <?=$current_year?> Copyright:
      <a href="http://club.onlinesborka.mcdir.ru/" class="text-white">club.onlinesborka.mcdir.ru</a>
    </div>

  </footer>
  
</body>
</html>
<?php $this->endPage() ?>
