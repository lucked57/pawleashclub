<?php
    $this->title = $albom['albom_'.$lang];
?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.css" />
   <div class="container-fluid mt-5 pt-5">
    <h1 class="text-center"><?=$albom['albom_'.$lang]?></h1>
          <!-- <p class="text-center">Также доступно в <a href="#">инстаграм<i class="fa fa-instagram"></i></a></p>-->
          <div class="gallery-d p-2">
             
             
  
             
            <?php foreach ($img_arr as $img):?>
             
   
             
              <a href="<?='/web/'.$img['img_full']?>" data-fancybox="images">
                <img src="/web/<?=$img['img_min']?>"  />
              </a>
              <?php if($admin == true):?>
                   
                   <a class="delete_gal mx-3" id="<?=$img['id']?>" style="cursor:pointer;">
                      <button class="btn btn-warning">
                        <i class="fas fa-trash-alt"></i>
                        </button>
                    </a>
               <?php endif; ?>
            <?php    endforeach;?>
            
          </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.4.2/jquery.fancybox.min.js"></script>
