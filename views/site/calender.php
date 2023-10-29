

<div class="container-fluid mt-5 pt-5">
	<div class="row">
		<div class="col col-md-12">

			<div class="table-responsive">
			<div id="eventCalendar"></div>



			
			</div>

			<div class="container">
				<div class="row">
					<div class="col">
						<div style="width: 20px; height: 20px; background: green; position: absolute;"></div>
						<p class="ml-4"> - свободное время</p>
					</div>
					<div class="col">
						<div style="width: 20px; height: 20px; background: #ffc107; position: absolute;"></div>
						<p class="ml-4"> - клубные занятия</p>
					</div>
					<div class="col">
						<div style="width: 20px; height: 20px; background: red; position: absolute;"></div>
						<p class="ml-4"> - занято</p>
					</div>
					
				</div>
				
			</div>
		</div>
		<div class="col col-md-12 mt-5 mt-md-0 mb-5 mb-md-0">
			<a href="https://wa.me/37256869123">
				<button class="btn btn-lg" style="background: #43d854; color: white;">
					Забронировать <i class="fab fa-whatsapp"></i>
				</button>
			</a>
			<a href="https://www.facebook.com/ekaterina.bulgakova.1840">
				<button class="btn btn-lg btn-primary mt-md-0 mt-2">
					Забронировать <i class="fab fa-facebook-messenger"></i>
				</button>
			</a>
			


			<?php if($admin == true || $moderator == true): ?>
				<div class="form-group">
				<label class="control-label" for="date_customer">Дата</label>
				<input type="text" id="date_customer" class="form-control" name="date_customer" aria-required="true" aria-invalid="false" placeholder="Выбранная дата" required="required" maxlength="10" readonly>


				<div class="form-group">
				    <label for="chosetime">Выбрать время</label>
				    <select class="form-control" id="chosetime">
				      <option>09:00</option>
				      <option>10:00</option>
				      <option>11:00</option>
				      <option>12:00</option>
				      <option>13:00</option>
				      <option>14:00</option>
				      <option>15:00</option>
				      <option>16:00</option>
				      <option>17:00</option>
				      <option>18:00</option>
				      <option>19:00</option>
				      <option>20:00</option>
				      <option>21:00</option>
				      <option>22:00</option>
				      <option>23:00</option>
				    </select>
				  </div>



				  <div class="form-group">
				    <label for="chosetime">Текущий тип</label>
				    <select class="form-control" id="chosetype">
				    	<?php foreach($selecttype_sh as $post): ?>
				      			<option><?=$post['type_ru']?></option>
				      	<? endforeach; ?>
				    </select>
				  </div>


				  <div class="form-group">
				    <label for="newtype">Новый тип</label>
				    <select class="form-control" id="newtype">
				    	<?php foreach($selecttype_sh as $post): ?>
				      			<option><?=$post['type_ru']?></option>
				      	<? endforeach; ?>
				    </select>
				  </div>

				  <div class="form-group">
				    <label for="statustype">Статус</label>
				    <select class="form-control" id="statustype">
				      			<option>Занято</option>
				      			<option>Свободно</option>
				    </select>
				  </div>


				  <div class="form-group">
				    <label for="chosemeta">Действие</label>
				    <select class="form-control" id="chosemeta">
				      			<option>Обновить</option>
				      			<option>Удалить</option>
				    </select>
				  </div>






				<button type="button" id="date_br" class="btn btn-warning mt-2">Забронировать</button>

				<div class="help-block"></div>
				</div>



				<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Launch modal</button>












				<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModall" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="myModall">New message</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">

				      	  <?php
                     $now = new DateTime();
                    $current_year_add = substr($now->format('Y-m-d H:i:s'), 0, 4); //год
                    $current_day_add = substr($now->format('Y-m-d H:i:s'), 8, 2); //день
                    $current_month_add = substr($now->format('Y-m-d H:i:s'), 5, 2); //месяц

                    $today = date("l"); //проверка стоит ли 0 перед месяцем, если да, то убирам его, чтобы потом можно было производить вычисления
                    	$rest = substr($current_day_add, 0, -1);
                    if($rest == 0){
                    	$today_i = substr($current_day_add, 1, 1);
                    }


                    //Для нахождения числа понедельника, вычтем из текущего дня недели, кол-во дней до понедельника
                    if($today == 'Monday'){
                    	$i = 0;
                    }
                    elseif($today == 'Tuesday'){
                    	$i = 1;
                    }
                    elseif($today == 'Wednesday'){
                    	$i = 2;
                    }
                    elseif($today == 'Thursday'){
                    	$i = 3;
                    }
                    elseif($today == 'Friday'){
                    	$i = 4;
                    }
                    elseif($today == 'Saturday'){
                    	$i = 5;
                    }
                    elseif($today == 'Sunday'){
                    	$i = 6;
                    }
                    else{
                    	$moday_i = 'Возникал ошибка при автоопределении дня неделя, пожалуйства введите его вручную';
                    }

       

                    
                   

                    $monday_i = $today_i - $i;
                    //если понедльник был в предыдущем месяце, то monday_i = 0
                    if($monday_i == 0){
                    	$date = new DateTime();
	                    $date->modify('- 1 month'); 
	                    $d = new DateTime(substr($date->format('Y-m-d H:i:s'), 0, 10));
                    	$monday_i = substr($d->format('Ymt'), 6, 2);
                    	$current_month_add = substr($d->format('Ymt'), 4, 2);
                    }

                    //Если число месяца меньше 10, то ставим перед ним 0, чтобы получить двухзначное число
                    if(strlen($monday_i) == 1){
                    	$monday_i = '0'.$monday_i;
                    }
                    ?>

				      		<!-- Число понедельника первого месяца (с которого начинается добавление) -->
				      		<div class="form-group">
							    <label for="addmonday">Число понедельника</label>
							    <select class="form-control" id="addmonday">
							    	<option selected="selected">
											<?=$monday_i?>
									</option>
							      <option>01</option>
							      <option>02</option>
							      <option>03</option>
							      <option>04</option>
							      <option>05</option>
							      <option>06</option>
							      <option>07</option>
							      <option>08</option>
							      <option>09</option>
							      <option>10</option>
							      <option>11</option>
							      <option>12</option>
							      <option>13</option>
							      <option>14</option>
							      <option>15</option>
							      <option>16</option>
							      <option>17</option>
							      <option>18</option>
							      <option>19</option>
							      <option>20</option>
							      <option>21</option>
							      <option>22</option>
							      <option>23</option>
							      <option>24</option>
							      <option>25</option>
							      <option>26</option>
							      <option>27</option>
							      <option>28</option>
							      <option>29</option>
							      <option>30</option>
							      <option>31</option>
							    </select>
							  </div>



							  <!-- Номер первого месяца (с которого начинается добавление) -->
							  <div class="form-group">
							    <label for="addmonth">Текущий месяц (понедельника)</label>
							    <select class="form-control" id="addmonth">
							    	<option selected="selected">
											<?=$current_month_add?>
									</option>
							      <option>01</option>
							      <option>02</option>
							      <option>03</option>
							      <option>04</option>
							      <option>05</option>
							      <option>06</option>
							      <option>07</option>
							      <option>08</option>
							      <option>09</option>
							      <option>10</option>
							      <option>11</option>
							      <option>12</option>
							    </select>
							  </div>


							

							<!-- Номер года (с которого начинается добавление) -->
				          <div class="form-group">
				            <label for="year_add" class="col-form-label">Текущий год</label>
				            <input type="text" class="form-control" id="year_add" maxlength="4" value="<?=$current_year_add?>">
				          </div>

				          <!-- Количество недель -->
				          <div class="form-group">
				            <label for="week_add" class="col-form-label">Кол-во недель</label>
				            <input type="text" class="form-control" id="week_add" maxlength="2">
				          </div>
	

				         <!-- Понедельник -->
				         <!-- 10 - время, Свободно - status, Аренда зала - type_ru -->
				          <div class="form-group">
				            <label for="monday_add" class="col-form-label">Понедельник</label>
				            <textarea class="form-control" id="monday_add" placeholder="10:00-Свободно-Аренда зала;"></textarea>
				          </div>


				          <!-- Вторник -->
				         <!-- 10 - время, Свободно - status, Аренда зала - type_ru -->
				          <div class="form-group">
				            <label for="tuesday_add" class="col-form-label">Вторник</label>
				            <textarea class="form-control" id="tuesday_add" placeholder="10:00-Свободно-Аренда зала;"></textarea>
				          </div>

				          <!-- Среда -->
				         <!-- 10 - время, Свободно - status, Аренда зала - type_ru -->
				          <div class="form-group">
				            <label for="wednesday_add" class="col-form-label">Среда</label>
				            <textarea class="form-control" id="wednesday_add" placeholder="10:00-Свободно-Аренда зала;"></textarea>
				          </div>

				          <!-- Четверг -->
				         <!-- 10 - время, Свободно - status, Аренда зала - type_ru -->
				          <div class="form-group">
				            <label for="thursday_add" class="col-form-label">Четверг</label>
				            <textarea class="form-control" id="thursday_add" placeholder="10:00-Свободно-Аренда зала;"></textarea>
				          </div>

				          <!-- Пятница -->
				         <!-- 10 - время, Свободно - status, Аренда зала - type_ru -->
				          <div class="form-group">
				            <label for="friday_add" class="col-form-label">Пятница</label>
				            <textarea class="form-control" id="friday_add" placeholder="10:00-Свободно-Аренда зала;"></textarea>
				          </div>

				          <!-- Суббота -->
				         <!-- 10 - время, Свободно - status, Аренда зала - type_ru -->
				          <div class="form-group">
				            <label for="saturday_add" class="col-form-label">Суббота</label>
				            <textarea class="form-control" id="saturday_add" placeholder="10:00-Свободно-Аренда зала;"></textarea>
				          </div>

				          <!-- Воскресенье -->
				         <!-- 10 - время, Свободно - status, Аренда зала - type_ru -->
				          <div class="form-group">
				            <label for="sunday_add" class="col-form-label">Воскресенье</label>
				            <textarea class="form-control" id="sunday_add" placeholder="10:00-Свободно-Аренда зала;"></textarea>
				          </div>
				      
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary" id="add_week_new">Add</button>
				      </div>
				    </div>
				  </div>
				</div>




















			<?php endif; ?>



		</div>
	</div>
</div>



<script src="http://code.jquery.com/jquery.min.js"></script>
<script>

	var data_w;

	var arr_free = [];

	var date = new Date();

	var month_now = date.getMonth() + 1;

	var year_now = date.getFullYear();

	var day_chose;

	var date_pr_s;

	
	function chosedate(){
		//2020-09-01 11:00:00
		$(document).ready(function(){
		  $(".eventCalendar-day").on('click',function(){
		    day_chose = $(this).attr('rel');
		    //console.log(day_chose);
		   // console.log(month_now);
		  	//console.log(year_now);

		var month_ch = month_now;

				if(month_now < 10){
					 month_ch = '0' + month_ch;
				}
			
			if(day_chose < 10){
					 day_chose = '0' + day_chose;
				}


		  	


		  	date_chose = year_now + '-' + month_ch + '-' + day_chose;

		  	$('#date_customer').val(date_chose);

		  	console.log(date_chose);
		  });

	})

		$('.eventCalendar-day-header').css({'height' : '40px'});


			var current_day;

			var current_month;

			var arr_freej = [];

			var i = 0;

			var day_povtor;
			var day_povtor_i = 0;
			while (i < data_json.length){


							var date_i = data_json[i].date;

							var status_i = data_json[i].status;

							var type_i = data_json[i].type_ru;

							var month = date_i.substr(5, 2);

							var day = date_i.substr(8, 2);

							var year = date_i.substr(0, 4);

							if(month.substr(0, 1) == 0){
								month = month.substr(1, 2);
							}


							if(status_i == 'Занято' && month_now == month && year == year_now){

										if(day_povtor == day){
											day_povtor_i++;
										}
										else{
											day_povtor = day;
											day_povtor_i = 0;
										}

										

										if(day.substr(0, 1) == 0){
											day = day.substr(1, 2);
										}

										//console.log(day);

										if(day_povtor_i < 10){
											$('.eventCalendar-day[rel="' + day + '"]').append('<a class="text-white">' + data_json[i].date.substring(11, 16) + ' - Занято</p>');
										}

										
									}

								i++;

			}



			
	}





function freestatus(){
			//функция при первой загрузке

	chosedate();


			/*$('.eventCalendar-day-header').css({'height' : '40px'});


			var current_day;

			var current_month;

			var arr_freej = [];

			var i = 0;

			var day_povtor;
			var day_povtor_i = 0;
			while (i < data_json.length){


							var date_i = data_json[i].date;

							var status_i = data_json[i].status;

							var type_i = data_json[i].type_ru;

							var month = date_i.substr(5, 2);

							var day = date_i.substr(8, 2);

							var year = date_i.substr(0, 4);

							if(month.substr(0, 1) == 0){
								month = month.substr(1, 2);
							}


							if(status_i == 'Занято' && month_now == month && year == year_now){

										if(day_povtor == day){
											day_povtor_i++;
										}
										else{
											day_povtor = day;
											day_povtor_i = 0;
										}

										

										if(day.substr(0, 1) == 0){
											day = day.substr(1, 2);
										}

										console.log(day);

										if(day_povtor_i < 4){
											$('.eventCalendar-day[rel="' + day + '"]').append('<a class="text-white">' + data_json[i].date.substring(11, 16) + ' - Занято</p>');
										}

										
									}

								i++;

			}*/






		//$('.eventCalendar-day[rel="5"]').append('<a class="text-white">' + data_json[5].date.substring(11, 16) + ' - Занято</p>');


			var j = 0;
        	while (j < arr_free.length){
        		if(arr_free[j].substr(0, 1) == 0){
        			arr_free[j] = arr_free[j].substr(1, 2);
        		}

        		$('.eventCalendar-day[rel="' + arr_free[j] + '"]').css('background', 'green');
        		$('.eventCalendar-day[rel="' + arr_free[j] + '"] a').css('background', 'green');
        		j++;
        	}
}

function closefirtsload(){

        	$('.eventCalendar-list-wrap').css('display', 'none');

        	$(document).ready(function(){


		$('.eventCalendar-next').on("click", function(){

			if(month_now == 12){
				month_now = 1;
				year_now++;
			}
			else{
				month_now++;
			}
		  	console.log(month_now);
		  	console.log(year_now);
		});




		$('.eventCalendar-prev').on("click", function(){

			if(month_now == 1){
				month_now = 12;
				year_now--;
			}
			else{
				month_now--;
			}
		  	console.log(month_now);
		  	console.log(year_now);
		});


		$('.eventCalendar-arrow').on("click", function(){


				chosedate();

					




				



								var current_day;

								var current_month;

								var arr_freej = [];

				 				var i = 0;
				                while (i < data_json.length){


				                	var date_i = data_json[i].date;

									var status_i = data_json[i].status;

									var type_i = data_json[i].type_ru;

									var month = date_i.substr(5, 2);

									var day = date_i.substr(8, 2);

									var year = date_i.substr(0, 4);

									if(month.substr(0, 1) == 0){
										month = month.substr(1, 2);
									}


									if(status_i == 'Свободно' && month_now == month && year == year_now){
										//console.log(day);
										if(day != current_day){
											current_day = day;
											arr_freej.push(day);
											console.log(arr_freej);
										}
										
									}



										var j = 0;
							        	while (j < arr_freej.length){
							        		if(arr_freej[j].substr(0, 1) == 0){
							        			arr_freej[j] = arr_freej[j].substr(1, 2);
							        		}

							        		$('.eventCalendar-day[rel="' + arr_freej[j] + '"]').css('background', 'green');
							        		$('.eventCalendar-day[rel="' + arr_freej[j] + '"] a').css('background', 'green');
							        		j++;
							        	}


                                    i++;
                                }



























		});

	})




        	freestatus();
}



function Calendar_data(){

	$(function(){
				//var str_main = '2020-09-01 11:00:00;занято,2020-09-01 12:00:00;занято,2020-09-01 13:00:00;занято';
			/*	var str_main = data_w;
				var text = str_main.split(',');

				var current_day;

				var current_month;
				


				var i = 0;
				while (i < text.length) {
				  

						var date_ch = text[i].split(';');

						var date_i = date_ch[0];

						var status_i = date_ch[1];

						var month = date_i.substr(5, 2);

						var day = date_i.substr(8, 2);

						var year = date_i.substr(0, 4);

						if(month.substr(0, 1) == 0){
							month = month.substr(1, 2);
						}

						if(status_i == 'Свободно' && month_now == month && year == year_now){
							//console.log(day);
							if(day != current_day){
								current_day = day;
								arr_free.push(day);
								//console.log(arr_free);
								//console.log(month);
								//console.log(month_now);
							}
							
						}

						if(status_i == 'Свободно'){
							status_i = '<p style="color: green">' + status_i + '</p>';
						}
						else{
							status_i = '<p style="color: #ffc107">' + status_i + '</p>';
						}


						if( i == 0 ){
							var data = [
								{ "date": date_i, "title": status_i, "description": "Данное время уже занято" },
							];
						}
						else{
							data.push({"date": date_i, "title": status_i, "description": "Данное время уже занято"}); 
						}


				  i++;
				}*/




								var current_day;

								var current_month;



				 				var i = 0;
				                while (i < data_json.length){


				                	var date_i = data_json[i].date;

									var status_i = data_json[i].status;

									var type_i = data_json[i].type_ru;

									var month = date_i.substr(5, 2);

									var day = date_i.substr(8, 2);

									var year = date_i.substr(0, 4);

									if(month.substr(0, 1) == 0){
										month = month.substr(1, 2);
									}


									if(status_i == 'Свободно' && month_now == month && year == year_now){
										//console.log(day);
										if(day != current_day){
											current_day = day;
											arr_free.push(day);
											//console.log(arr_free);
											//console.log(month);
											//console.log(month_now);
										}
										
									}



									/*	if(status_i == 'Свободно'){
											status_i = '<p style="color: green">' + status_i + ' ('+ type_i + ') </p>';
										}
										else{
											status_i = '<p style="color: #ffc107">' + status_i + ' ('+ type_i + ') </p>';
										}*/

										if(type_i == 'Аренда зала'){
											if(status_i == 'Свободно'){
											status_i = '<p style="color: green">' + status_i + ' </p>';
											}
											else{
												status_i = '<p style="color: red">' + status_i + ' </p>';
											}
										}
										else{
											status_i = '<p style="color: #ffc107">'+ type_i + ' </p>';
										}


										if( i == 0 ){
											var data = [
												{ "date": date_i, "title": status_i, "description": "Данное время уже занято" },
											];
										}
										else{
											data.push({"date": date_i, "title": status_i, "description": "Данное время уже занято"}); 
										}


                                    i++;
                                }


		/*var data = [
			{ "date": data_w, "title": "Занято", "description": "Данное время уже занято" },
			{ "date": "2020-09-01 11:00:00", "title": "Занято", "description": "Lorem Ipsum dolor set" },
			{ "date": "2020-09-01 12:00:00", "title": "Занято", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/" },
			{ "date": "2020-09-01 13:00:00", "title": "Свободно", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/" },
            { "date": "2020-09-01 14:00:00", "title": "Занято", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/" },
            { "date": "2020-09-04 15:00:00", "title": "Занято", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/" },
		];*/


		//data.push({"date": "2020-09-04 16:00:00", "title": "Занято", "description": "Lorem Ipsum dolor set", "url": "http://www.event3.com/"}); 

		$('#eventCalendar').eventCalendar({
			jsonData: data,
			eventsjson: 'data.json',
			jsonDateFormat: 'human',
			startWeekOnMonday: false,
			openEventInNewWindow: true,
			dateFormat: 'DD-MM-YYYY',
			showDescription: false,
			locales: {
				locale: "ru",
				txt_noEvents: "В данный день нету занятий",
				txt_SpecificEvents_prev: "",
				txt_SpecificEvents_after: "Время занятий:",
				txt_NextEvents: "Ближайшии занятия:",
				txt_GoToEventUrl: "Смотреть",
				moment: {
					"months" : [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
					"Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
					"monthsShort" : [ "Янв", "Фев", "Мар", "Апр", "Май", "Июн",
					"Июл", "Авг", "Сен", "Окт", "Ноя", "Дек" ],
					"weekdays" : [ "Воскресенье", "Понедельник","Вторник","Среда","Четверг",
					"Пятница","Суббота" ],
					"weekdaysShort" : [ "Вс","Пн","Вт","Ср","Чт",
					"Пт","Сб" ],
					"weekdaysMin" : [ "Вс","Пн","Вт","Ср","Чт",
					"Пт","Сб" ]
				}
			}
		});







			closefirtsload(); ///////////////////////////





	});
	}



$(function(){
$(document).ready(function(){

              $.ajax({
                          url: "/site/calender",
                          type: "POST",
                          data: ({target: 'select'}),
                          dataType: "html",
                          success: function(data){

                              Calendar_data();
                              
                              data_json = JSON.parse(data);

                              
                           /*   var i = 0;
				                while (i < data_json.length){
                                    
                                    if(i == 0){
                                        data_w = data_json[i].date+';'+data_json[i].status+',';
                                    }
                                    else{
                                        data_w += data_json[i].date+';'+data_json[i].status+',';
                                    
                                    }
                                    
                                    i++;
                                }
                              data_w = data_w.substring(0, data_w.length - 1);*/
                              
                          }

                })

              	

      		})
})



	var el_val = '';
	var typescholl = '';

         $(document).on('click','li', function(){
			$('.eventCalendar-list-wrap').css('display', 'block');


					$(document).ready(function(){
				      $(".eventCalendar-list li").on('click',function(){

				      	if(el_val != $(this).html() && $(this).html().length > 5){

				      		el_val = $(this).html();

				      		var time_r = el_val.indexOf("<small>");

				      		var time = el_val.substr(time_r + 7, 5);

				      		var color_r = el_val.indexOf("color: green");

				      		var type_now = el_val.substr(color_r + 14, 8); // Свободно

				      		if(color_r == -1){                           // Занято
				      			color_r = el_val.indexOf("color: red");
				      			type_now = el_val.substr(color_r + 12, 6);
				      		}
 
				      		if(color_r == -1){                             // Название школы
				      			color_r = el_val.indexOf("color: #ffc107");
				      			color_l = el_val.indexOf("</span>");
				      			color_l = color_l - color_r;
				      			type_now = el_val.substr(color_r + 16, color_l - 21);
				      		}

				      		if(type_now == 'Свободно' || type_now == 'Занято'){
				      			typescholl = 'Аренда зала';
				      		}
				      		else{
				      			typescholl = type_now;
				      		}



				      		//console.log($(this).html());
				      		//console.log(type_now);
				      		//console.log(typescholl);
				      		//console.log(time);
				      		$('#chosetime').val(time);
				      		$('#chosetype').val(typescholl);
				      		$('#newtype').val(typescholl);
				      	}
				      	else{
				      		console.log('Ошибка, данный файл слишком короткий');
				      	}

				      	
				        //day_chose = $(this).attr('rel');

				        //$('#date_customer').val(date_chose);

				        //console.log(date_chose);
				      });

				  })

		});


       /*  $(document).ready(function(){
		  $(".eventCalendar-day").on('click',function(){



		  			$(document).ready(function(){
					  $(".eventCalendar-list li").on('click',function(){
					    //day_chose = $(this).attr('rel');

					    alert($(this).html());
					  });


				});

	})

});*/




	</script>
	<!--



	#шпиц #шпицуля #шпицы #шпицмосква #белыйшпиц #померанскийшпиц #шпицпродажа #лучшийдругчеловека #шпицмишка #шпицмини #сидеть #угс #послушнаясобака #воспитаниещенка #обучениесобак #кожаныйнос #собакамосква #воспитаниесобак #дрессировкасобакмосква #дрессировкасобак #worlddog #worlddogs #dogtrainers #trainingdogs #worlddogday #дрессировкасобаки #кинологмосква #дрессировкащенка #кинолог #кинологи


	steam gurard R28641



	#yorkshireterrier #yorkie #yorkielife #yorkielove #yorkshire #йоркширскийтерьер #йорк #йорки #йоркирулят #yorkiedog #йоркшир #ipo #dogvideo #dogvideos #lovepuppies #танцыссобакой #танцыссобаками #dancedog #хендлинг #pawleashclub #puppytraining #дрессировкащенка #воспитаниесобак #handler #dogdancer #dogdance #хендлер #дрессировкасобаки #koertenäitus #eestikoerad

	-->