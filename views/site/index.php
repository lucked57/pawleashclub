<?php

/* @var $this yii\web\View */

//$this->title = 'Main';
?>

<?php

   /* foreach($Home as $lang){
        echo $lang['text_1_ru'] . "<br>";
    }*/
     $text_pieces =  explode("/*****/", $Home['text_1_'.$lang]);
?>

<div class="cd-fixed-bg cd-fixed-bg--1" id="topw">
			<div class="cd-fixed-bg__content">
				<!--<h1 class="d-block d-sm-none">PawLeashClub</h1>-->
				
			</div>
		</div>
		<main>
		<div class="container-fluid container-homepage">
            <!--<div class="text-center">
                <img src="../web/img/logo/PawLeash_logo.png" class="img-fluid logo-main" alt="logo">
            </div>-->
            
		  <!--  <h1 class="jumbotron-heading text-center">Лучший фитнес-клуб в ЮВАО г Москвы</h1>
		    <p class="lead">Ваша собака пробегает хотя бы 5 километров в день? А ведь это минимум физической нагрузки для собаки среднего размера. Отдельные породы нуждаются в повышенных нагрузках, для хаски это — 10 километров в день под нагрузкой. 
Минимум!</p>-->
<!--




#дворняга #дворняжка #моданадворняг #коррекцияповедения #лучшийдругчеловека #окд #сидеть #угс #послушнаясобака #воспитаниещенка #обучениесобак #dog #собака #щенки #щенок #dogtraining #собакамосква #воспитаниесобак #дрессировкасобакмосква #дрессировкасобак #worlddog #worlddogs #dogtrainers #trainingdogs #worlddogday #дрессировкасобаки #кинологмосква #дрессировкащенка #кинолог #кинологи







  -->
             

                <div class="row featurette">
                  <div class="col-md-6 mt-5">
                    <?=$text_pieces[0]?>
                  </div>
                  <div class="col-md-6 mt-5">
                    <img class="featurette-image img-fluid mx-auto" src="../web/img/homepage/main_1.jpg" alt="Generic placeholder image">
                  </div>
                </div>
                
                
                
                <div class="row featurette my-5">
                  <div class="col-md-6 order-md-2">
                  <?=$text_pieces[1]?>
                      
                  </div>
                  <div class="col-md-6 order-md-1">
                    <img class="featurette-image img-fluid mx-auto" src="../web/img/homepage/main_2.jpg" alt="Generic placeholder image">
                  </div>
                </div>
                
                
                
                <div class="row featurette my-5">
                  <div class="col-md-6">
                 <?=$text_pieces[2]?>
                  </div>
                  <div class="col-md-6">
                    <img class="featurette-image img-fluid mx-auto" src="../web/img/homepage/main_3.jpg" alt="Generic placeholder image">
                  </div>
                </div>
    
                
                    <p class="lead mt-3 mb-5 pb-5">
                        <?=$text_pieces[3]?>
                    </p>
                
    
		 

<h2 class="featurette-heading text-warning text-center my-5">Наши услуги:</h2>


        <div class="row text-center">
          <div class="col-lg-4">
            <img class="rounded-circle img-main" src="../web/img/homepage/main_d.jpg" alt="Generic placeholder image">
            <h2 class="my-2">Дрессировка</h2>
            <p class="lead">В нашем центре ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий.</p>
            <p><a class="btn btn-warning" href="site/service" role="button">Подробнее »</a></p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle img-main" src="../web/img/homepage/main_h.jpg" alt="Generic placeholder image">
            <h2 class="my-2">Хендлинг</h2>
            <p class="lead">В нашем центре ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий.</p>
           <p><a class="btn btn-warning" href="site/service" role="button">Подробнее »</a></p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle img-main" src="../web/img/homepage/main_g.jpg" alt="Generic placeholder image">
            <h2 class="my-2">Груминг</h2>
            <p class="lead">В нашем центре ваш питомец попадает в руки профессионалов, результат работы которых будет заметен уже после нескольких занятий.</p>
           <p><a class="btn btn-warning" href="site/service" role="button">Подробнее »</a></p>
          </div>
        </div>

</div>
      
