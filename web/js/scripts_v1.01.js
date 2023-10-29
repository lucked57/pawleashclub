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