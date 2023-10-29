<?php

            if(empty($article['title_'.$lang])){
                        if($lang == 'ru'){
                            $lang = 'ee';
                        }
                        else{
                            $lang = 'ru';
                        }
                    }

?>
 <div class="container-img  d-block d-sm-none">
     <img src="/web/<?=$article['image']?>" class="img-fluid " alt="">
     <div class="centered">
         <h1 class="text-center" style="font-weight: 300; font-size: 2rem;"><?=$article['title_'.$lang]?></h1>
     </div>
 </div>
 
 
 

 
<div class="cd-fixed-bg d-none d-sm-block" id="topw" style="background-image: url('/web/<?=$article['image']?>');">
       
       
			<div class="cd-fixed-bg__content"> <!--style="top:10%;"-->
				<h1 class="text-white"><?=$article['title_'.$lang]?></h1>
				
			</div>
		</div>
		
		<div class="container mt-5">
		    <p class="lead mt-5 pt-5" style="text-indent: 0em;"><?=$article['text_'.$lang]?></p>
		</div> 

