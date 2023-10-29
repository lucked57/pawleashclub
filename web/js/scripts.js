$(document).ready(function($) {
  $('.card').matchHeight();
});
var lang;
  $('#ru').on('click', function(){
            lang = 'ru';
        });
 $('#est').on('click', function(){
            lang = 'ee';
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
                            if(lang == 'ee'){
                                window.location = "http://pawleashclub.loc/ee";
                            }
                            else{
                                window.location = "http://pawleashclub.loc/";
                            }
                            

                        }
                    },
                error: function(){
                        console.log('error');
                    }
            });
        });
});









//////////////       site/article

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






















//////////////       site/galleryfull


          $(document).ready(function(){
    
            $('.delete_gal').on("click", function(){

                var errors = false;

                var id_connetc = parseInt($(this).attr('id').trim());
                
                //errors = id_connetc;
                
                
                var isDel = confirm("Вы - уверены, что хотите удалить данную фотку?");
                
                if(!isDel){
                    errors = 'Отмена';
                }

                if(errors == false){

                $.ajax({
                          url: "/site/galleryfull",
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






               $('.delete_alb').on("click", function(){

                var errors = false;

                var id_connetc = parseInt($(this).attr('id').trim());
                
                //errors = id_connetc;
                
                
                var isDel = confirm("Вы - уверены, что хотите удалить данный альбом?");
                
                if(!isDel){
                    errors = 'Отмена';
                }

                if(errors == false){

                $.ajax({
                          url: "/site/galleryfull",
                          type: "POST",
                          data: ({id: id_connetc, target: 'delete_alb'}),
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


//////      site/addgallery
$(document).ready(function(){


    var albom =  $("#select_albom").val();
    $('#gallery-id_albom').val(albom);

    $( "#select_albom" ).change(function() {
            var albom =  $("#select_albom").val();
            if(albom != 'Выбрать альбом'){
                $('#gallery-id_albom').val(albom);
            }
            else{
                $('#gallery-id_albom').val('');
            }
    });
})




///////   site/addvideo





 $(document).ready(function(){
    

               $('.delete_video').on("click", function(){

                var errors = false;

                var id_connetc = parseInt($(this).attr('id').trim());
                
                //errors = id_connetc;
                
                
                var isDel = confirm("Вы - уверены, что хотите удалить данное видео?");
                
                if(!isDel){
                    errors = 'Отмена';
                }

                if(errors == false){

                $.ajax({
                          url: "/site/addvideo",
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





 /////////////////////menu icon

 $(document).ready(function(){
  $(".navbar-toggler").on('click',function(){
    $(".hambergerIcon").toggleClass("open");
  });

  $(".modal-menu").on('click',function(){
    $(".hambergerIcon").toggleClass("open");
  });
})


///////////////// site/calender


$(document).ready(function(){


         $('#date_br').on("click", function(){

                var errors = false;

                var date_ch = $("#date_customer").val();
              
                var time_ch  = $("#chosetime").val();

                var type_school  = $("#chosetype").val();

                var new_type_school  = $("#newtype").val();

                var status_type  = $("#statustype").val();

                var chosemeta  = $("#chosemeta").val();

                time_ch = time_ch + ':00';
                
                var date_fin = date_ch + ' ' + time_ch;

                var id;
                
                var isDel = confirm("Вы - уверены, что хотите забронировать дату " + date_fin +"?");
                
                if(!isDel){
                    errors = 'Отмена';
                }


                if(chosemeta == 'Обновить'){
                  var target = 'update';
                }
                else if(chosemeta == 'Удалить'){
                  var target = 'delete';
                }


                if(date_ch.length != 10){
                  errors = 'Неправильно заполнено поле дата';
                }

                if(new_type_school.length < 5){
                  errors = 'Неправильно заполнено новая дата';
                }

                if(status_type.length < 5){
                  errors = 'Неправильно заполнено статус';
                }

                if(time_ch.length != 8){
                  errors = 'Неправильно заполнено поле время';
                }


                if( date_pr_s == date_fin){
                  errors = 'Данное время вы только что добавили:), пожалуйста обновите страницу';
                }




                var i = 0;
                var not_null = false;
                        while (i < data_json.length){
                                    
                                    if(date_fin == data_json[i].date){

                                      not_null = true;

                                      if( type_school == data_json[i].type_ru){

                                          if(data_json[i].status == 'Свободно' || data_json[i].status == 'Занято'){
                                          id = data_json[i].id;
                                        }
                                        else{
                                          errors = 'Данное время уже занято';
                                        }

                                      }
                                      
                                      
                                      
                                      
                                    }
                                    

                                    
                                    i++;
                                }


                                if(!id){

                                  errors = 'Правильно укажите школу';

                                }


                                if(!not_null){
                                  errors = 'Выберите свобное время в календаре, чтобы его занять (зеленый цвет) и правильно укажите школу';
                                }


                if(errors == false){

                    //console.log(date_fin, id, type_school);

                $.ajax({
                          url: "/site/calender",
                          type: "POST",
                          data: ({date: date_fin, status: status_type, target: target, id: id, type: new_type_school}), //target add
                          dataType: "html",
                          success: function(data){
                             date_pr_s = date_fin;
                              alert(data);
                          }

                })
                }
                else{
                    alert(errors);
                }

        })


  })







































$(document).ready(function(){


         $('#add_week_new').on("click", function(){

                var errors = false;

                var firstmonday = $("#addmonday").val();

                var month = $("#addmonth").val();

                var year = $("#year_add").val();

                var weekcount = $("#week_add").val();

                var monday = $("#monday_add").val();

                var tuesday = $("#tuesday_add").val();

                var wednesday = $("#wednesday_add").val();

                var thursday = $("#thursday_add").val();

                var friday = $("#friday_add").val();

                var saturday = $("#saturday_add").val();

                var sunday = $("#sunday_add").val();

                if(monday.length == 0 && tuesday.length == 0 && wednesday.length == 0 && thursday.length == 0 && friday.length == 0 && saturday.length == 0 && sunday.length == 0){
                  errors = 'Заполните хотя бы один день недели';
                }

                if(firstmonday.length != 2){
                  errors = 'Правильно заполните первый понедельник';
                }

                if(month.length != 2){
                  errors = 'Правильно заполните месяц';
                }

                if(year.length != 4){
                  errors = 'Правильно заполните год';
                }

                if(weekcount.length == 0){
                  errors = 'Правильно заполните кол-во недель';
                }


                if(errors == false){

                    //console.log(date_fin, id, type_school);

                $.ajax({
                          url: "/site/calender",
                          type: "POST",
                          data: ({target: 'add', firstmonday: firstmonday, month: month, year: year, weekcount: weekcount, monday: monday, tuesday: tuesday, wednesday: wednesday, thursday: thursday, friday: friday, saturday: saturday, sunday: sunday }), 
                          dataType: "html",
                          success: function(data){
                              alert(data);
                          }

                })
                }
                else{
                    alert(errors);
                }

        })


  })