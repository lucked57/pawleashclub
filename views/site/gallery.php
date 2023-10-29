<?php

  use app\models\Gallery_paw;
  use yii\helpers\Url;

?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css" />
   <div class="container-fluid mt-5 pt-5">
    <h1 class="text-center">Галерея</h1>
           <!--<p class="text-center">Также доступно в <a href="#">инстаграм<i class="fa fa-instagram"></i></a></p>-->

          <div class="gallery-d albom p-2">
             <div class="container-fluid"> 
                <div class="row">
  
             
            <?php foreach ($img_arr as $img):?>
             

              <?php
                  $name = $img['albom_'.$lang];
                  $id = $img['id'];
                  //$img_arr = Gallery_paw::find()->orderBy(['id' => SORT_DESC])->asArray()->all();
                  $img_last = Gallery_paw::find()->orderBy(['id' => SORT_DESC])->asArray()->where(['id_albom' => $id])->one();

                    if(empty($post['title_'.$lang])){
                        if($lang == 'ru'){
                            $lang_e = 'ee';
                        }
                        else{
                            $lang_e = 'ru';
                        }
                    }
                    $lang_url = '/'.$lang;
                    if($lang == 'ru'){
                      $lang_url = '';
                    }
                ?>


             
                  
                   <div class="col-md">
                      <a href="http://pawleashclub.loc/site/galleryfull/?post_id=<?=$id?><?=$lang_url?>">

                        <img src="/web/<?=$img_last['img_min']?>"  />
                        <h2 class="text-warning text-uppercase font-weight-bold"><?=$name?></h2>
                      </a>
                      <?php if($admin == true):?>
                    
                         <a class="delete_alb mx-3" id="<?=$img['id']?>" style="cursor:pointer;">
                          <button class="btn btn-warning">
                                    <i class="fas fa-trash-alt"></i>
                              </button>
                          </a>

                          <button class="btn btn-warning">
                            <i class="fas fa-pen"></i>

                          </button>
   
                     <?php endif; ?>
                    </div>
                      
              
              <?php if($admin == true):?>
                   
                 <!--  <a class="delete_gal mx-3" id="<?=$img['id']?>" style="cursor:pointer;">
                        <i class="fas fa-trash-alt"></i> Удалить
                    </a>-->
               <?php endif; ?>
            <?php    endforeach;?>
   
                  </div>
              </div>
          </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js"></script>
