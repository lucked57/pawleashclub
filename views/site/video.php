<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>-->
<div class="container-fluid mt-5 pt-5">
    <div class="row justify-content-around mr-0 ml-0" id="contentposts">



      <?php foreach($selectPost as $post): ?>


        <div class="col-lg-5 mb-5">
                  <div class="card shadow" style="">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="card-img-top" src="<?=$post['video_link']?>" frameborder="0" allowfullscreen="">
                            </iframe>
                        </div>

                  <div class="card-body">
                      <h5 class="card-title"><?=$post['title_'.$lang]?></h5>

                      <p class="card-text"><?=$post['text_'.$lang]?></p> 

                      <button type="button" class="btn btn-warning dropdown-toggle mb-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius: 50em;"><i class="fa fa-share" aria-hidden="true"></i></button>

                    <div class="dropdown-menu">
                         <div class="social" data-url="<?=$post['video_link']?>" data-title="Профессиональная дрессировка собак">
                            <a class="dropdown-item" data-id="fb"><i class="fa fa-facebook-official pr-1"></i>Facebook</a>
                            <a class="dropdown-item" data-id="tw"><i class="fa fa-twitter pr-1"></i>Twitter</a>
                            <a class="dropdown-item" data-id="vk"><i class="fa fa-vk pr-1"></i>Вконтакте</a>
                            <a class="dropdown-item" data-id="gp"><i class="fa fa-google-plus pr-1"></i>Google+</a>
                            <a class="dropdown-item" data-id="ok"><i class="fa fa-odnoklassniki pr-1"></i>ОК</a>
                        </div>
                    </div>
                    <?php if($admin == true):?>
                   
                   <a class="delete_video ml-3 btn btn-warning" id="<?=$post['id']?>" style="cursor:pointer;">
                        <i class="fas fa-trash-alt"></i>
                    </a>
               <?php endif; ?>
                </div>
              </div>
              </div>

<? endforeach; ?>





    </div>
</div>

<!--<script type="text/javascript">
    $(document).ready(function($) {
  $('.card').matchHeight();
});
</script>-->
