var slot1 = $("#slot1").slotMachine({
																	active	: 0,
																	delay	: 1000
																	

																});

							var slot2 = $("#slot2").slotMachine({
																	active	: 0,
																	delay	: 1000
																	

																});

							var slot3 = $("#slot3").slotMachine({
																	active	: 0,
																	delay	: 1000
																	

																});


							var slot4 = $("#slot4").slotMachine({
																	active	: 0,
																	delay	: 1000

																});


							var slot5 = $("#slot5").slotMachine({
																	active	: 0,
																	delay	: 1000
																	

																});


							
								
	function post() {
            
           
            $.post('get_small_prize.php',{},
            function(data)
            {   
               var i = 0;
               var records = jQuery.parseJSON(data);
               result0 = "";
            
/*
            $('#result1-1').text(finDealer1);
            $('#result1-2').text(finDealer2);
            $('#result1-3').text(finDealer3);
            $('#result1-4').text(finDealer4);
            $('#result1-5').text(finDealer5);
            */


             for(i = 1 ; i <= 5 ; i++){
             	for(j = 1 ; j <= 5 ; j++){

            var class_name = '#result' + i + "-" +j;
             	
            $('#result0').text(result0);
            $(class_name).text(records[i-1]);
           

   			}         
       			}

          
                


            });
        }
								$('#playFancy').click(function(){

									post();
									
		     		
									var spd = new Array();
									var min = 10;
									var max = 20;
									var i = 0;
									for(i = 1 ; i <= 5 ; i++){

									rand_time = Math.floor(Math.random() * (max - min + 1)) + min;
									spd.push(rand_time);
									console.log(rand_time);


									
									}

									slot1.setRandomize(3);
									slot2.setRandomize(3);
									slot3.setRandomize(3);
									slot4.setRandomize(3);
									slot5.setRandomize(3);
									
									slot1.shuffle(11);
									slot2.shuffle(17);
									slot3.shuffle(15);
									slot4.shuffle(19);
									slot5.shuffle(13);

								});	

							

