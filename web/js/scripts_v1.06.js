$(document).ready(function($) {
  $('.card').matchHeight();
});
var lang;
  $('#ru').on('click', function(){
            lang = 'ru';
        });
 $('#est').on('click', function(){
            lang = 'est';
        });
$(document).ready(function($) {
  $('.lang').on('click', function(){
            //alert(lang);
            $.ajax({
                url: '/site/index',
                data: {lang: lang},
                type: 'POST',
                success: function(data){
                        if(data == 'location'){
                            window.location = '/';
                        }
                    },
                error: function(){
                        console.log('error');
                    }
            });
        });
});

           $(document).ready(function(){
    
            $('.conntect_a').on("click", function(){

                var errors = false;

                var id_connetc = parseInt($(this).attr('id').trim());
                
                //errors = id_connetc;
                
                
                var isDel = confirm("Вы - уверены, что хотите удалить данную выставку?");
                
                if(!isDel){
                    errors = 'Отмена';
                }

                if(errors == false){

                $.ajax({
                          url: "/site/article",
                          type: "POST",
                          data: ({id: id_connetc, target: 'delete'}),
                          dataType: "html",
                          success: function(data){
                              //alert(data);
                          }

                })
                }
                else{
                    alert(errors);
                }

        })
               
            /*   setTimeout(Change_width, 500);
               
            function Change_width(){
               $('#sputnik-maps-jsapi3-1NXXC2eqmkha').width('100%'); 
            }  */
})

























          $(document).ready(function(){
    
            $('.delete_gal').on("click", function(){

                var errors = false;

                var id_connetc = parseInt($(this).attr('id').trim());
                
                //errors = id_connetc;
                
                
                var isDel = confirm("Вы - уверены, что хотите удалить данную выставку?");
                
                if(!isDel){
                    errors = 'Отмена';
                }

                if(errors == false){

                $.ajax({
                          url: "/site/gallery",
                          type: "POST",
                          data: ({id: id_connetc, target: 'delete'}),
                          dataType: "html",
                          success: function(data){
                              //alert(data);
                          }

                })
                }
                else{
                    alert(errors);
                }

        })
               
})
