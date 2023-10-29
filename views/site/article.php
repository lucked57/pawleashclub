<?php
    use yii\helpers\Url;
?>
   <div class="container-fluid mt-5 pt-5">
    <div class="row justify-content-around mr-0 ml-0" id="contentposts">
              <?php foreach($selectPost as $post): ?>
              
              <?php
                    if(empty($post['title_'.$lang])){
                        if($lang == 'ru'){
                            $lang_e = 'ee';
                        }
                        else{
                            $lang_e = 'ru';
                        }
                    }
                ?>
              <?php if(!empty($post['title_'.$lang])): ?>
                   <div class="col-lg-5 mb-5">
                <div class="card shadow">
              <img class="card-img-top" src="/web/<?=$post['image_min']?>">
              <div class="card-body">
                <h5 class="card-title"><?=$post['title_'.$lang]?></h5>
                <p class="card-text"><?=mb_substr($post['text_'.$lang],0,219)?>...</p> 
                <a href="<?=Url::to(['site/fullarticle', 'post_id' => $post['id']]);?>" class="btn btn-warning">Подробнее</a>
                
                
                
                <?php if($admin == true):?>
                   
                   <a class="conntect_a ml-3" id="<?=$post['id']?>" style="cursor:pointer;">
                        <i class="fas fa-trash-alt"></i>
                    </a>
               <?php endif; ?>

              </div>
            </div>
              </div>
          <?php else: ?>
              <div class="col-lg-5 mb-5">
                <div class="card shadow">
              <img class="card-img-top" src="/web/<?=$post['image_min']?>">
              <div class="card-body">
                <h5 class="card-title"><?=$post['title_'.$lang_e]?></h5>
                <p class="card-text"><?=mb_substr($post['text_'.$lang_e],0,219)?>...</p> 
                <a href="http://pawleashclub.loc/site/fullarticle/?post_id=<?=$post['id']?>" class="btn btn-warning">Подробнее</a> 
                
                
                <?php if($admin == true):?>
                   
                   <a class="conntect_a ml-3" id="<?=$post['id']?>" style="cursor:pointer;">
                        <i class="fas fa-trash-alt"></i>
                    </a>
               <?php endif; ?>

              </div>
            </div>
              </div>
          <?php endif; ?>
          
          <? endforeach; ?>
    </div>
</div>