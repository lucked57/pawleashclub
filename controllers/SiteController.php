<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\HomePage;
use app\models\Login;
use app\components\Uservaludate;
use app\models\Uploadpost;
use yii\web\UploadedFile;
use app\models\SelectPost;
use app\models\Alboms;
use app\models\Gallery;
use app\models\Video;
use app\models\Calender;
use app\models\Typeschool;
use app\models\Gallery_paw;
use yii\helpers\Url;


class SiteController extends AppController
{
    
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        
        
        
        
        
        //$lang = Uservaludate::CookieLang();
        //$url =  Url::current();
        
        /*if($lang == 'ru' && $validURL != 'http://pawleashclub.loc/'){
            $this->redirect('http://pawleashclub.loc/');
        }
        if($lang == 'ee' && $validURL != 'http://pawleashclub.loc/ee'){
            $this->redirect('http://pawleashclub.loc/ee');
        }*/

        
           
        
       /* $url      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        $validURL = str_replace("&", "&amp", $url);
        
       $lang = Uservaludate::CookieLang();
        //$url =  Url::current();
        
        
        if($lang == 'ru' && $validURL != 'http://pawleashclub.loc/'){
            $this->redirect('http://pawleashclub.loc/');
        }
        if($lang == 'ee' && $validURL != 'http://pawleashclub.loc/ee'){
            $this->redirect('http://pawleashclub.loc/ee');
        }*/
        
        
        
        if( Yii::$app->request->isAjax ){
                $lang = Uservaludate::validateInput($_POST['lang']);
                if($lang == 'ru' || $lang == 'ee'){
                    $cookies = Yii::$app->response->cookies;
                    $cookies->add( new \yii\web\Cookie([
                            'name' => 'lang',
                            'value' => $lang,
                            'expire' => time() + 86400 * 365,
                        ]));
                    return 'location';
                }
                else{
                    return $lang;
                }
                
            }
        $lang = Uservaludate::routing_lang();
        //$lang = Uservaludate::CookieLang();
      
       /* if($validURL == 'http://pawleashclub.loc/'){
            $lang = 'ru';
        }
        if($validURL == 'http://pawleashclub.loc/ee'){
            $lang = 'ee';
        }*/
        
        $Home = HomePage::find()->asArray()->one();

        if($lang == 'ru'){
            $title = "Pawleash Club Дрессировка собак & Хендлинг & Груминг в Таллине";
            $keywords = 'дрессировка собак, хендлер, pawleashclub, дрессировка собак в эстонии';
            $description = 'В центре PawLeash Club Ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий. Будем рады подружиться с вашей собакой и обучить ее чему-нибудь новенькому!';
        }
        else{
            $title = "Pawleash Club koerte koolitus ja käitlemine ning trimmimine Tallinnas";
            $keywords = 'koerte koolitus, koerajuht, pandimaja, koerte koolitus Eestis';
            $description = 'Klubis PawLeash satub teie lemmikloom professionaalide kätte, kelle tulemused on märgatavad juba mõne seansi järel. Meil on hea meel teie koeraga sõbraks saada ja õpetada talle midagi uut!';
        }
        
         $this->view->title = $title;
         
         $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
         $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);
        
        return $this->render('index', compact('Home','lang'));
    }

    /**
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        
        $lang = Uservaludate::routing_lang();

        if($lang == 'ru'){
            $title = "Pawleash Club Контакты";
            $keywords = 'дрессировка собак, хендлер, pawleashclub, дрессировка собак в эстонии';
            $description = 'В центре PawLeash Club Ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий. Будем рады подружиться с вашей собакой и обучить ее чему-нибудь новенькому!';
        }
        else{
            $title = "Pawleash Club Contact";
            $keywords = 'koerte koolitus, koerajuht, pandimaja, koerte koolitus Eestis';
            $description = 'Klubis PawLeash satub teie lemmikloom professionaalide kätte, kelle tulemused on märgatavad juba mõne seansi järel. Meil on hea meel teie koeraga sõbraks saada ja õpetada talle midagi uut!';
        }
        
         $this->view->title = $title;
         
         $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
         $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);
        
       return $this->render('contact');
    }


    public function actionPortfolio()
    {
        
        $lang = Uservaludate::routing_lang();

        if($lang == 'ru'){
            $title = "Pawleash Club Портфолио";
            $keywords = 'дрессировка собак, хендлер, pawleashclub, дрессировка собак в эстонии';
            $description = 'В центре PawLeash Club Ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий. Будем рады подружиться с вашей собакой и обучить ее чему-нибудь новенькому!';
        }
        else{
            $title = "Pawleash Club Portfolio";
            $keywords = 'koerte koolitus, koerajuht, pandimaja, koerte koolitus Eestis';
            $description = 'Klubis PawLeash satub teie lemmikloom professionaalide kätte, kelle tulemused on märgatavad juba mõne seansi järel. Meil on hea meel teie koeraga sõbraks saada ja õpetada talle midagi uut!';
        }
        
         $this->view->title = $title;
         
         $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
         $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);
        
       return $this->render('portfolio');
    }


    

 
   public function actionService()
    {
       
        $lang = Uservaludate::routing_lang();


        if($lang == 'ru'){
            $title = "Pawleash Club Услуги";
            $keywords = 'дрессировка собак, хендлер, pawleashclub, дрессировка собак в эстонии';
            $description = 'В центре PawLeash Club Ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий. Будем рады подружиться с вашей собакой и обучить ее чему-нибудь новенькому!';
        }
        else{
            $title = "Pawleash Club Service";
            $keywords = 'koerte koolitus, koerajuht, pandimaja, koerte koolitus Eestis';
            $description = 'Klubis PawLeash satub teie lemmikloom professionaalide kätte, kelle tulemused on märgatavad juba mõne seansi järel. Meil on hea meel teie koeraga sõbraks saada ja õpetada talle midagi uut!';
        }
        
         $this->view->title = $title;
         
         $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
         $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);




       
        return $this->render('service');
    }
    public function actionRegulations()
    {
        
        
      $lang = Uservaludate::routing_lang();

      if($lang == 'ru'){
            $title = "Pawleash Club Правила";
            $keywords = 'дрессировка собак, хендлер, pawleashclub, дрессировка собак в эстонии';
            $description = 'В центре PawLeash Club Ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий. Будем рады подружиться с вашей собакой и обучить ее чему-нибудь новенькому!';
        }
        else{
            $title = "Pawleash Club Regulations";
            $keywords = 'koerte koolitus, koerajuht, pandimaja, koerte koolitus Eestis';
            $description = 'Klubis PawLeash satub teie lemmikloom professionaalide kätte, kelle tulemused on märgatavad juba mõne seansi järel. Meil on hea meel teie koeraga sõbraks saada ja õpetada talle midagi uut!';
        }
        
         $this->view->title = $title;
         
         $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
         $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);
        
      return $this->render('regulations');
    }
    
    
    public function actionCalender(){
        
        
        $lang = Uservaludate::routing_lang();

        if($lang == 'ru'){
            $title = "Pawleash Club Расписание";
            $keywords = 'дрессировка собак, хендлер, pawleashclub, дрессировка собак в эстонии';
            $description = 'В центре PawLeash Club Ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий. Будем рады подружиться с вашей собакой и обучить ее чему-нибудь новенькому!';
        }
        else{
            $title = "Pawleash Club Calender";
            $keywords = 'koerte koolitus, koerajuht, pandimaja, koerte koolitus Eestis';
            $description = 'Klubis PawLeash satub teie lemmikloom professionaalide kätte, kelle tulemused on märgatavad juba mõne seansi järel. Meil on hea meel teie koeraga sõbraks saada ja õpetada talle midagi uut!';
        }
        
         $this->view->title = $title;
         
         $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
         $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);


        if(  Uservaludate::validateCookieModerator() ){
            $moderator = true;
        }
        else{
            $moderator = false;
        }


        if(  Uservaludate::validateCookie() ){
            $admin = true;
        }
        else{
            $admin = false;
        }



        if( Yii::$app->request->isAjax ){

                
                $target = Uservaludate::validateInput($_POST['target']);
                
                if($target == 'select'){
                    
                    //$data = '2020-09-01 11:00:00;занято,2020-09-01 12:00:00;занято,2020-09-01 13:00:00;занято,2020-09-05 16:00:00;занято,2020-09-01 14:00:00;занято';


                    $selectdate = Calender::find()->orderBy(['date' => SORT_ASC])->asArray()->limit(500000)->all();

                      /*  foreach ($selectdate as $date_i) {
                            $data .= $date_i[date].';';
                            $data .= $date_i[status].',';
                        }

                        $data = mb_substr($data, 0, -1);*/

                        $json_str = json_encode($selectdate);
                    
                    return $json_str;
                    
                    
                }


                if($target == 'add'){

                    if($moderator || $admin){


                        $model = new Calender();

                        $firstmonday = Uservaludate::validateInput($_POST['firstmonday']);

                        $month = Uservaludate::validateInput($_POST['month']);

                        $year = Uservaludate::validateInput($_POST['year']);

                        $weekcount = Uservaludate::validateInput($_POST['weekcount']);




                        $monday = Uservaludate::validateInput($_POST['monday']);

                        $tuesday = Uservaludate::validateInput($_POST['tuesday']);

                        $wednesday = Uservaludate::validateInput($_POST['wednesday']);

                        $thursday = Uservaludate::validateInput($_POST['thursday']);

                        $friday = Uservaludate::validateInput($_POST['friday']);

                        $saturday = Uservaludate::validateInput($_POST['saturday']);

                        $sunday = Uservaludate::validateInput($_POST['sunday']);

                        if(empty($monday) && empty($tuesday) && empty($wednesday) && empty($thursday) && empty($friday) && empty($saturday) && empty($sunday)){
                        
                            $errors = 'Заполните хотя бы одно значение';

                        }

                        if(strlen($firstmonday) != 2){
                            $errors = 'Правильно заполните первый понедельник';
                        }

                        if($weekcount < 1){
                            $errors = 'Правильно заполните кол-во недель';
                        }

                        if(strlen($month) != 2){
                            $errors = 'Правильно заполните месяц';
                        }

                        if(strlen($year) != 4){
                            $errors = 'Правильно заполните год';
                        }

                        if(strlen($weekcount) == 0){
                            $errors = 'Правильно заполните кол-во недель';
                        }


                        if(empty($errors)){


                   
                           $i_date = $firstmonday;//// число понедельника первого месяца (с которого начинается добавление)
                           //$month = $month; //// номер первого месяца (с которого начинается добавление)
                           $month = intval($month); 
                           if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           //$year = $year;
                      
             
                            if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }    
                           

                        $i = 1;
                       while ($i <= $weekcount){  //$weekcount - кол-во недель


                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                                if($month < 10){
                                $month_add = '0'.$month;
                               }
                               else{
                                $month_add = $month;
                               }
                               if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  

//////////////////////////////////////////понедельник

                           if(!empty($monday)){
                                $point = $monday;
                                $point = explode(";", $point);

                                foreach ($point as $pieces) {
                                    $pieces = explode("-", $pieces);
                                    $time = trim($pieces[0]).':00';
                                    $status = trim($pieces[1]);
                                    $type_ru = trim($pieces[2]);
                                    if(!empty($pieces[0]) && !empty($pieces[1]) && !empty($pieces[2])){
                                        $mode_pr = Typeschool::find()->where(['type_ru' => $type_ru])->one();
                                        if(!empty($mode_pr) && strlen(trim($pieces[0])) == 5){
                                            if($status == 'Свободно' || $status == 'Занято'){
                                               $test .= $time.' '.$status.' '.$type_ru;
                                                $model = new Calender();

                                                $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$time; 
                                                $model->status = $status;
                                                $model->type_ru = $type_ru;
                                                $model->save(); 
                                            }
                                            
                                        }
                                        
                                    }

                                }
                           }

                            





                            $i_date++;


                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  

/////////////////////////////////////////вторинк

                           if(!empty($tuesday)){

                                $point = $monday;
                                $point = explode(";", $point);

                                foreach ($point as $pieces) {
                                    $pieces = explode("-", $pieces);
                                    $time = trim($pieces[0]).':00';
                                    $status = trim($pieces[1]);
                                    $type_ru = trim($pieces[2]);
                                    if(!empty($pieces[0]) && !empty($pieces[1]) && !empty($pieces[2])){
                                        $mode_pr = Typeschool::find()->where(['type_ru' => $type_ru])->one();
                                        if(!empty($mode_pr) && strlen(trim($pieces[0])) == 5){
                                            if($status == 'Свободно' || $status == 'Занято'){
                                               $test .= $time.' '.$status.' '.$type_ru;
                                                $model = new Calender();

                                                $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$time; 
                                                $model->status = $status;
                                                $model->type_ru = $type_ru;
                                                $model->save(); 
                                            }
                                            
                                        }
                                        
                                    }

                                }
                           }

                            $i_date++;

                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  


//////////////////////////////Среда


                            if(!empty($wednesday)){

                                $point = $wednesday;
                                $point = explode(";", $point);

                                foreach ($point as $pieces) {
                                    $pieces = explode("-", $pieces);
                                    $time = trim($pieces[0]).':00';
                                    $status = trim($pieces[1]);
                                    $type_ru = trim($pieces[2]);
                                    if(!empty($pieces[0]) && !empty($pieces[1]) && !empty($pieces[2])){
                                        $mode_pr = Typeschool::find()->where(['type_ru' => $type_ru])->one();
                                        if(!empty($mode_pr) && strlen(trim($pieces[0])) == 5){
                                            if($status == 'Свободно' || $status == 'Занято'){
                                               $test .= $time.' '.$status.' '.$type_ru;
                                                $model = new Calender();

                                                $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$time; 
                                                $model->status = $status;
                                                $model->type_ru = $type_ru;
                                                $model->save(); 
                                            }
                                            
                                        }
                                        
                                    }

                                }
                           }



                            $i_date++;

                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  


///////////////////////////////////////////Четверг
                            

                           if(!empty($thursday)){

                                $point = $thursday;
                                $point = explode(";", $point);

                                foreach ($point as $pieces) {
                                    $pieces = explode("-", $pieces);
                                    $time = trim($pieces[0]).':00';
                                    $status = trim($pieces[1]);
                                    $type_ru = trim($pieces[2]);
                                    if(!empty($pieces[0]) && !empty($pieces[1]) && !empty($pieces[2])){
                                        $mode_pr = Typeschool::find()->where(['type_ru' => $type_ru])->one();
                                        if(!empty($mode_pr) && strlen(trim($pieces[0])) == 5){
                                            if($status == 'Свободно' || $status == 'Занято'){
                                               $test .= $time.' '.$status.' '.$type_ru;
                                                $model = new Calender();

                                                $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$time; 
                                                $model->status = $status;
                                                $model->type_ru = $type_ru;
                                                $model->save(); 
                                            }
                                            
                                        }
                                        
                                    }

                                }
                           }


                            $i_date++;

                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  

/////////////////////////////////////////Пятница


                            if(!empty($friday)){

                                $point = $friday;
                                $point = explode(";", $point);

                                foreach ($point as $pieces) {
                                    $pieces = explode("-", $pieces);
                                    $time = trim($pieces[0]).':00';
                                    $status = trim($pieces[1]);
                                    $type_ru = trim($pieces[2]);
                                    if(!empty($pieces[0]) && !empty($pieces[1]) && !empty($pieces[2])){
                                        $mode_pr = Typeschool::find()->where(['type_ru' => $type_ru])->one();
                                        if(!empty($mode_pr) && strlen(trim($pieces[0])) == 5){
                                            if($status == 'Свободно' || $status == 'Занято'){
                                               $test .= $time.' '.$status.' '.$type_ru;
                                                $model = new Calender();

                                                $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$time; 
                                                $model->status = $status;
                                                $model->type_ru = $type_ru;
                                                $model->save(); 
                                            }
                                            
                                        }
                                        
                                    }

                                }
                           }


                           $i_date++;

                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           } 





////////////////////////////////////////Суббота



                             if(!empty($saturday)){

                                $point = $saturday;
                                $point = explode(";", $point);

                                foreach ($point as $pieces) {
                                    $pieces = explode("-", $pieces);
                                    $time = trim($pieces[0]).':00';
                                    $status = trim($pieces[1]);
                                    $type_ru = trim($pieces[2]);
                                    if(!empty($pieces[0]) && !empty($pieces[1]) && !empty($pieces[2])){
                                        $mode_pr = Typeschool::find()->where(['type_ru' => $type_ru])->one();
                                        if(!empty($mode_pr) && strlen(trim($pieces[0])) == 5){
                                            if($status == 'Свободно' || $status == 'Занято'){
                                               $test .= $time.' '.$status.' '.$type_ru;
                                                $model = new Calender();


                                                $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$time; 
                                                $model->status = $status;
                                                $model->type_ru = $type_ru;
                                                $model->save(); 
                                            }
                                            
                                        }
                                        
                                    }

                                }
                           }


                           $i_date++;

                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           } 





/////////////////////////////////Воскресенье

                           if(!empty($sunday)){

                                $point = $sunday;
                                $point = explode(";", $point);

                                foreach ($point as $pieces) {
                                    $pieces = explode("-", $pieces);
                                    $time = trim($pieces[0]).':00';
                                    $status = trim($pieces[1]);
                                    $type_ru = trim($pieces[2]);
                                    if(!empty($pieces[0]) && !empty($pieces[1]) && !empty($pieces[2])){
                                        $mode_pr = Typeschool::find()->where(['type_ru' => $type_ru])->one();
                                        if(!empty($mode_pr) && strlen(trim($pieces[0])) == 5){
                                            if($status == 'Свободно' || $status == 'Занято'){
                                               $test .= $time.' '.$status.' '.$type_ru;
                                                $model = new Calender();

                                                $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$time; 
                                                $model->status = $status;
                                                $model->type_ru = $type_ru;
                                                $model->save(); 
                                            }
                                            
                                        }
                                        
                                    }

                                }
                           }


                           $i_date++;

                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           } 











                                $i++;



                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year); //30
                            if($i_date + 3 > $day_in_month){ 
                                    //$i_date_sel = $day_in_month .' - '.$i_date;


                                    if($i_date == $day_in_month){
                                        $i_date = 3;
                                    }
                                    if($i_date + 1 == $day_in_month){
                                        $i_date = 2;
                                    }
                                    if($i_date + 2 == $day_in_month){
                                        $i_date = 1;
                                    }

                                    //$i_date = $day_in_month - $i_date;
    
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  


                            

                            }

                            




                            return 'Данные успешно добавлены';
                        }
                        else{
                            return $errors;
                        }

    
                        

                    }

                }





                if($target == 'update'){

                    if($moderator || $admin){


                        $model = new Calender();

                        $date = Uservaludate::validateInput($_POST['date']);

                        $status = Uservaludate::validateInput($_POST['status']);

                        $type = Uservaludate::validateInput($_POST['type']);

                        $id = Uservaludate::validateInput($_POST['id']);

                        if(empty($date) || empty($status) || empty($id) || empty($type)){
                        
                            $errors = 'Есть пустые значения'.$id;

                        }


                        if(empty($errors)){

                            $model = Calender::find()->where(['id' => $id])->one();

                            $model->status = $status;
                            $model->type_ru = $type;
                            $model->save();

                            return 'Данные успешно добавлены';
                        }
                        else{
                            return $errors;
                        }

    
                        

                    }

                }




                if($target == 'delete'){

                    if($moderator || $admin){


                        $model = new Calender();

                        $date = Uservaludate::validateInput($_POST['date']);

                        $status = Uservaludate::validateInput($_POST['status']);

                        $type = Uservaludate::validateInput($_POST['type']);

                        $id = Uservaludate::validateInput($_POST['id']);

                        if(empty($date) || empty($status) || empty($id) || empty($type)){
                        
                            $errors = 'Есть пустые значения'.$id;

                        }


                        if(empty($errors)){

                            $table = Calender::findone($id);
            
                            if($table->delete()){
                                return 'Данные успешно удалены';
                            }

                            return 'Ошибка при удалении';
                        }
                        else{
                            return $errors;
                        }

    
                        

                    }

                }

            
        }



        $selecttype_sh = Typeschool::find()->orderBy(['id' => SORT_DESC])->asArray()->limit(50)->all();

        
        return $this->render('calender', compact('admin','moderator','selecttype_sh'));
    }



    public function actionAddvideo(){
        
        
        $lang = Uservaludate::routing_lang();
        
        if(Uservaludate::validateCookie()){
            
        
        
        $add_model = new Video();
        if($add_model->load(Yii::$app->request->post())){
            
            if($add_model->validate()){
                    $add_model->add_video();
                    Yii::$app->session->setFlash('success', 'Данные приняты');
                    return $this->refresh();

                
            }
            else{
                 foreach ($add_model->getErrors() as $key => $value) {
                        $error_arr =  $key.': '.$value[0];
                      }
                        Yii::$app->session->setFlash('error', $error_arr);
            }
        }


        if( Yii::$app->request->isAjax ){
            
            if( Uservaludate::validateCookie() ){
                
                $target = Uservaludate::validateInput($_POST['target']);
                
                if($target == 'delete'){
                    
                    $model = new Video();
                    $id = Uservaludate::validateInput($_POST['id']);
                    if($model->delete_video($id)){

                    }
                    
                    
                }
                
            }
            
        }

/*
                   
                           $i_date = 26;//// число понедельника первого месяца (с которого начинается добавление)
                           $month = 10; //// номер первого месяца (с которого начинается добавление)
                           if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           $year = 2020;
                      
             
                            if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }    
                           

                        $i = 1;
                       while ($i <= 9){  //16


                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                                if($month < 10){
                                $month_add = '0'.$month;
                               }
                               else{
                                $month_add = $month;
                               }
                               if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  



                            $i_hour = 10;


                            $model = new Calender();

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 14, hour - 10
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $i_hour++; 

                            $model = new Calender();

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //hour - 11
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();


                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; // hour - 12
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; // hour - 13
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; // hour - 14
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; // hour - 15
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; // hour - 16
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; // hour - 17
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; // hour - 18
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; // hour - 19
                            $model->status = 'Занято';
                            $model->type_ru = 'Школа щенка';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; // hour - 20
                            $model->status = 'Занято';
                            $model->type_ru = 'Школа щенка';
                            $model->save();

                            $model = new Calender();

                            $i_hour = 10;
                            $i_date++;


                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 22, hour - 10
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $i_hour++;


                            $model = new Calender();


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 22, hour - 11
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();


                            $i_hour++;

                            $model = new Calender();


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 22, hour - 12
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();


                            $i_hour++;

                            $model = new Calender();


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 22, hour - 13
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();


                            $i_hour++;

                            $model = new Calender();


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 22, hour - 14
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();


                            $i_hour++;

                            $model = new Calender();


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 22, hour - 15
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();


                            $i_hour++;

                            $model = new Calender();


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 22, hour - 16
                            $model->status = 'Занято';
                            $model->type_ru = 'Хендлинг';
                            $model->save();


                            $i_hour++;

                            $model = new Calender();


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 22, hour - 17
                            $model->status = 'Занято';
                            $model->type_ru = 'Хендлинг';
                            $model->save();


                            $i_hour++;

                            $model = new Calender();


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 22, hour - 18
                            $model->status = 'Занято';
                            $model->type_ru = 'Школа юного хендлера';
                            $model->save();


                            $i_hour++;

                            $model = new Calender();


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 22, hour - 19
                            $model->status = 'Занято';
                            $model->type_ru = 'Хендлинг';
                            $model->save();


                            $i_hour++;

                            $model = new Calender();


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 22, hour - 20
                            $model->status = 'Занято';
                            $model->type_ru = 'Хендлинг';
                            $model->save();


                            $i_hour++;


   



                            $model = new Calender();

                            $i_hour = 10;
                            $i_date++;

                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 10
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 11
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 12
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 13
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 14
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 15
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 16
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 17
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 18
                            $model->status = 'Занято';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 19
                            $model->status = 'Занято';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 20
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 23, hour - 21
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();


                            $i_hour = 10;
                            $i_date++;

                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  


                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 10
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;



                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 11
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 12
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 13
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 14
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 15
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 16
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 17
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 18
                            $model->status = 'Занято';
                            $model->type_ru = 'Школа юного хендлера';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 19
                            $model->status = 'Занято';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 20
                            $model->status = 'Занято';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 24, hour - 21
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;





                            $i_hour = 10;
                            $i_date++;

                            if($i_date > 20){
                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year);
                                if($i_date - 1 == $day_in_month){
                                    $i_date = 1;
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                }
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  


                            $model->date =$year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 10
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 11
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 12
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 13
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 14
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 15
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 16
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 17
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 18
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 19
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 20
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                            $model->date = $year.'-'.$month_add.'-'.$day_add.' '.$i_hour.':00:00'; //date - 25, hour - 21
                            $model->status = 'Свободно';
                            $model->type_ru = 'Аренда зала';
                            $model->save();

                            $model = new Calender();

                            $i_hour++;

                                $i++;



                                $day_in_month = cal_days_in_month(CAL_GREGORIAN, $month, $year); //30
                            if($i_date + 3 > $day_in_month){ 
                                    //$i_date_sel = $day_in_month .' - '.$i_date;


                                    if($i_date == $day_in_month){
                                        $i_date = 3;
                                    }
                                    if($i_date + 1 == $day_in_month){
                                        $i_date = 2;
                                    }
                                    if($i_date + 2 == $day_in_month){
                                        $i_date = 1;
                                    }

                                    //$i_date = $day_in_month - $i_date;
    
                                    $month++;
                                    if($month == 13){
                                        $month = 1;
                                        $year++;
                                    }
                                
                            }
                            else{
                                $i_date = $i_date + 3;
                            }
                            if($month < 10){
                            $month_add = '0'.$month;
                           }
                           else{
                            $month_add = $month;
                           }
                           if($i_date < 10){
                            $day_add = '0'.$i_date;
                           }
                           else{
                            $day_add = $i_date;
                           }  


                            

                            }

                            


*/


                            





                            //return $i_date_sel;


    
                        

 

        
        
        return $this->render('addvideo', compact('add_model'));
            
            }
            else{
                return $this->redirect('/');
            }
    }



    public function actionVideo()
    {




        $lang = Uservaludate::routing_lang();
        
        if($lang == 'ru'){
            $title = "Pawleash Club Видео";
            $keywords = 'дрессировка собак, хендлер, pawleashclub, дрессировка собак в эстонии';
            $description = 'В центре PawLeash Club Ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий. Будем рады подружиться с вашей собакой и обучить ее чему-нибудь новенькому!';
        }
        else{
            $title = "Pawleash Club Video";
            $keywords = 'koerte koolitus, koerajuht, pandimaja, koerte koolitus Eestis';
            $description = 'Klubis PawLeash satub teie lemmikloom professionaalide kätte, kelle tulemused on märgatavad juba mõne seansi järel. Meil on hea meel teie koeraga sõbraks saada ja õpetada talle midagi uut!';
        }
        
         $this->view->title = $title;
         
         $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
         $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);
        
        if(  Uservaludate::validateCookie() ){
            $admin = true;
        }
        else{
            $admin = false;
        }
        
        if( Yii::$app->request->isAjax ){
            
            if( Uservaludate::validateCookie() ){
                
                $target = Uservaludate::validateInput($_POST['target']);
                
                if($target == 'delete'){
                    
                    /*$model = new Uploadpost();
                    $id = Uservaludate::validateInput($_POST['id']);
                    if($model->delete_post($id)){
                    }*/
                    
                    
                }
                
            }
            
        }

        
        $selectPost = Video::find()->orderBy(['id' => SORT_DESC])->asArray()->limit(50)->all();
        
       return $this->render('video', compact('selectPost','lang','admin'));
    }
    
    
    public function actionGalleryfull(){
        
        $request = Yii::$app->request;
        
        $lang = Uservaludate::routing_lang();
        
        
        
         if(  Uservaludate::validateCookie() ){
            $admin = true;
        }
        else{
            $admin = false;
        }
        
        
        
         if( Yii::$app->request->isAjax ){
            
            if( Uservaludate::validateCookie() ){
                
                $target = Uservaludate::validateInput($_POST['target']);
                
                if($target == 'delete'){
                    
                    $model = new Gallery();
                    $id = Uservaludate::validateInput($_POST['id']);
                    if($model->delete_img($id)){

                    }
                    
                    
                }


                if($target == 'delete_alb'){
                    
                    $model = new Gallery();
                    $id = Uservaludate::validateInput($_POST['id']);
                    if($model->delete_albom($id)){

                    }
                    
                    
                }
                
            }
            
        }





         if ($request->isGet){
            $get = $request->get(); 
            $id = Uservaludate::validateInput($request->get('post_id'));
            //$article = Alboms::find()->asArray()->where(['id' => $id])->one();
            //$img_arr = Gallery_paw::find()->orderBy(['id' => SORT_DESC])->asArray()->all();
            $img_arr = Gallery_paw::find()->orderBy(['id' => SORT_DESC])->asArray()->where(['id_albom' => $id])->all();
            $albom = Alboms::findone($id);
            if(!empty($img_arr)){

                $lang = Uservaludate::CookieLang();
                return $this->render('galleryfull', compact('img_arr','admin','lang','albom'));
            }
            else{
                return $this->redirect('error');
            }
        }





        
        
        
        

        //$img_arr = Gallery_paw::find()->orderBy(['id' => SORT_DESC])->asArray()->all();
        
        
        
        //return $this->render('galleryfull', compact('img_arr','admin'));
    }
    
       public function actionGallery(){
        
        
        $lang = Uservaludate::routing_lang();

        if($lang == 'ru'){
            $title = "Pawleash Club Фото";
            $keywords = 'дрессировка собак, хендлер, pawleashclub, дрессировка собак в эстонии';
            $description = 'В центре PawLeash Club Ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий. Будем рады подружиться с вашей собакой и обучить ее чему-нибудь новенькому!';
        }
        else{
            $title = "Pawleash Club Photo";
            $keywords = 'koerte koolitus, koerajuht, pandimaja, koerte koolitus Eestis';
            $description = 'Klubis PawLeash satub teie lemmikloom professionaalide kätte, kelle tulemused on märgatavad juba mõne seansi järel. Meil on hea meel teie koeraga sõbraks saada ja õpetada talle midagi uut!';
        }
        
         $this->view->title = $title;
         
         $this->view->registerMetaTag(['name' => 'keywords', 'content' => $keywords]);
         $this->view->registerMetaTag(['name' => 'description', 'content' => $description]);
           
           
        if(  Uservaludate::validateCookie() ){
            $admin = true;
        }
        else{
            $admin = false;
        }
        
        
        
       /*  if( Yii::$app->request->isAjax ){
            
            if( Uservaludate::validateCookie() ){
                
                $target = Uservaludate::validateInput($_POST['target']);
                
                if($target == 'delete'){
                    
                    $model = new Gallery();
                    $id = Uservaludate::validateInput($_POST['id']);
                    if($model->delete_img($id)){

                    }
                    
                    
                }
                
            }
            
        }*/
        
        $img_arr = Alboms::find()->orderBy(['id' => SORT_DESC])->asArray()->limit(100)->all();
        
        $lang = Uservaludate::CookieLang();

        //$img_arr = Gallery_paw::find()->orderBy(['id' => SORT_DESC])->asArray()->all();
        return $this->render('gallery', compact('img_arr','admin','lang'));
    }
    
    public function actionFullarticle(){
        
        $request = Yii::$app->request;
        
        if ($request->isGet){
            $get = $request->get(); 
            $id = Uservaludate::validateInput($request->get('post_id'));
            $article = SelectPost::find()->asArray()->where(['id' => $id])->one();
            if(!empty($article)){
               /* $url      = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                $validURL = str_replace("&", "&amp", $url);

                $pos      = strripos($validURL, '/ee');

                if ($pos === false) {
                    $lang = 'ru';
                } else {
                    $lang = 'ee';
                }
                Yii::$app->params['lang'] = $lang;*/
                $lang = Uservaludate::CookieLang();
                return $this->render('fullarticle', compact('article','lang'));
            }
            else{
                return $this->redirect('error');
            }
        }
        
        
    }
    
    
    public function actionArticle(){
        
        
       /* $lang = Uservaludate::CookieLang();
        Url::toRoute(['site/article/', 'lang' => $lang]);
        $url =  Url::current();
        echo $url;
       if(!preg_match('['.$lang.']', $url)){
           $this->redirect($url.'?lang='.$lang);
       }*/
        
        $lang = Uservaludate::routing_lang();
        
        
        
        if(  Uservaludate::validateCookie() ){
            $admin = true;
        }
        else{
            $admin = false;
        }
        
        if( Yii::$app->request->isAjax ){
            
            if( Uservaludate::validateCookie() ){
                
                $target = Uservaludate::validateInput($_POST['target']);
                
                if($target == 'delete'){
                    
                    $model = new Uploadpost();
                    $id = Uservaludate::validateInput($_POST['id']);
                    if($model->delete_post($id)){
                        //echo 'test';
                    }
                    
                    
                }
                
            }
            
        }

        
        $selectPost = SelectPost::find()->orderBy(['id' => SORT_DESC])->asArray()->limit(12)->all();
        
        return $this->render('article', compact('selectPost','lang','admin'));
    }
    
    public function actionAddpost(){
        
        $lang = Uservaludate::routing_lang();
        
        if(Uservaludate::validateCookie()){
            
        
        
        $add_model = new Uploadpost();
        if($add_model->load(Yii::$app->request->post())){
            
            if($add_model->validate()){
                
                $add_model->image = UploadedFile::getInstance($add_model, 'image');
                if($add_model->upload()){
                    Yii::$app->session->setFlash('success', 'Данные приняты');
                    return $this->refresh();
                }
                else{
                    Yii::$app->session->setFlash('error', 'Заполните все поля');
                }
                
            }
            else{
                 foreach ($add_model->getErrors() as $key => $value) {
                        $error_arr =  $key.': '.$value[0];
                      }
                        Yii::$app->session->setFlash('error', $error_arr);
            }
        }
        
        
        return $this->render('addpost', compact('add_model'));
            
            }
            else{
                return $this->redirect('/');
            }
    }
    
    
    public function actionAddgallery(){
        
        $lang = Uservaludate::routing_lang();
         $model = new Gallery();
        if(Uservaludate::validateCookie()){
           
            
             if ($model->load(Yii::$app->request->post())) {
                $model->imageFiles = UploadedFile::getInstances($model, 'imageFiles'); //UploadedFile загрузка средствами yii без сжатия
                // var_dump($model);
                if($model->upload()){ //upload метод модели Gallery загрузка со сжатием, текст можно добавлять в методе upload модели Gallery
                    Yii::$app->session->setFlash('success', 'Данные приняты');
                    return $this->refresh();
                }
                else{
                    Yii::$app->session->setFlash('error', 'Заполните все поля');
                }
        }
            
            
            
            $alboms_arr = Alboms::find()->orderBy(['id' => SORT_DESC])->asArray()->limit(100)->all();
            
            return $this->render('addgallery', ['model' => $model, 'alboms_arr' => $alboms_arr]);
        }
        else
        {
            return $this->redirect('/');
        }
    }
    
    public function actionLogexit(){

        
                        $cookies = Yii::$app->response->cookies;
                    
                        unset($cookies['admin']);
                        unset($cookies['moderator']);
                        unset($cookies['auth_key']);
                        return $this->redirect('/');
    }
    
    
    
    public function actionLogin(){
        
        $login_model = new Login();
        
        $errors;
        
        
        
        
        
        if($login_model->load(Yii::$app->request->post())){
            
            
            $email = Uservaludate::validateInput($login_model->username);
            
            $pass = Uservaludate::validateInput($login_model->password);
            
            $pr_username = Login::find()->asArray()->where(['username' => $email])->one();
            
            if(empty($pr_username)){
                $errors = "Пользователь ".$email ." не найден";
            }
            else{
                if($pr_username['errors'] >= 5){
                    $errors = "Повторный пароль выслан на почту";
                    
                    if(empty($pr_username['code_email'])){
                       $kod_sesi = Uservaludate::generate_code(5);
                     $to  = "<".$email.">" ;

                        $subject = "Код подтверждения"; 

                        $message = '
                            <html>
                            <head>
                              <title>Ваш код:</title>
                            </head>
                            <body>
                              <p>Код: '.$kod_sesi.';</p> 
                            </body>
                            </html>
                            ';

                        $headers = 'From: PawLeashClub@example.com' . "\r\n" .
                        'Content-type: text/html; charset=UTF-8' . "\r\n" .
                        'Reply-To: PawLeashClub@example.com' . "\r\n" .
                        'X-Mailer: PHP/' . phpversion();

                        mail($to, $subject, $message, $headers);
                    
                        $kod_sesi = password_hash($kod_sesi, PASSWORD_DEFAULT);
                    
                        $update = Login::findone($pr_username['id']);
                        $update->code_email = $kod_sesi;
                        $update->save(); 
                    }
                    
                    
                    
                }
                else{
                  if(!password_verify($pass, $pr_username['password'])){
                      $up_err = $pr_username['errors'] + 1;
                      $errors = 'Неправильный пароль';
                      $update = Login::findone($pr_username['id']);
                      $update->errors = $up_err;
                      $update->save();
                      
                }  
                }
                
            }
            
            
            if(empty($errors)){
                
            
            
            
                if( $login_model->validate() ){  //save()

                        $name = 'admin';

                        if($pr_username['username'] == 'julia.anderson@mail.com' || $pr_username['username'] == '12021970e@gmail.com'){
                                $name = 'moderator';
                        }



                        Yii::$app->session->setFlash('success', 'Данные приняты');
                        //$session = Yii::$app->session;
                        //$session->set('admin', $pr_username['username']);
                        $cookies = Yii::$app->response->cookies;
                    
                        $cookies->add( new \yii\web\Cookie([
                            'name' => $name,
                            'value' => $pr_username['username'],
                            'expire' => time() + 86400 * 365,
                        ]));
                         $cookies->add( new \yii\web\Cookie([
                            'name' => 'auth_key',
                            'value' => $pr_username['auth_key'],
                            'expire' => time() + 86400 * 365,
                        ]));
                    
                        $update = Login::findone($pr_username['id']);
                        $update->errors = 0;
                        $update->code_email = '';
                        $update->save();
                        return $this->redirect('/');
                    }
                    else
                    {
                        
                        foreach ($login_model->getErrors() as $key => $value) {
                        $error_arr =  $key.': '.$value[0];
                      }
                        Yii::$app->session->setFlash('error', $error_arr);
                    }
            }
            elseif($errors == "Повторный пароль выслан на почту" && !empty($pr_username['code_email'])){
               $pr_username = Login::find()->asArray()->where(['username' => $email])->one();
                if(password_verify($pass, $pr_username['code_email'])){
                    Yii::$app->session->setFlash('success', 'Данные приняты');
                        $cookies = Yii::$app->response->cookies;


                        $name = 'admin';

                        if($pr_username['username'] == 'julia.anderson@mail.com' || $pr_username['username'] == '12021970e@gmail.com'){
                                $name = 'moderator';
                        }
                    
                        $cookies->add( new \yii\web\Cookie([
                            'name' => $name,
                            'value' => $pr_username['username'],
                            'expire' => time() + 86400 * 365,
                        ]));
                         $cookies->add( new \yii\web\Cookie([
                            'name' => 'auth_key',
                            'value' => $pr_username['auth_key'],
                            'expire' => time() + 86400 * 365,
                        ]));
                    
                        $update = Login::findone($pr_username['id']);
                        $update->errors = 0;
                        $update->code_email = '';
                        $update->save();
                        return $this->redirect('/');
                }
                else{
                    Yii::$app->session->setFlash('error', "Код не совпадает с высланным на почту");
                }
            }
            else{
                 Yii::$app->session->setFlash('error', $errors);
            }
            
            
            
        }
        
        return $this->render('login', compact('login_model'));
    }
    
    
    
    
}
