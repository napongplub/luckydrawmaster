
	var roller1 = $("#roller1").slotMachine({active : 1});
	var roller2 = $("#roller2").slotMachine({active	: 1});
	var roller3 = $("#roller3").slotMachine({active	: 1});
	var roller4 = $("#roller4").slotMachine({active	: 1});
	var roller5 = $("#roller5").slotMachine({active	: 1});
								
	function post() {
        $.post('get_small_prize_5.php', function (data) {   
        	
          	var i = 0;
           	var records = jQuery.parseJSON(data);
			console.log(records);

            result0 = "";	
            finDealer1 = records[0];
            finDealer2 = records[1];
            finDealer3 = records[2];
            finDealer4 = records[3];
            finDealer5 = records[4];

		//Real lucky
		
			
		
         	for(i = 1 ; i <= 5 ; i++) {
 				for(j = 1 ; j <= 15 ; j++) {
					if(j != 7){
					var class_name = "";
        			class_name = '#result' + i + "-" +j;   
        			//console.log(class_name);          	
        			$(class_name).text(records[j-1]);
        			
					}
				}         
   			}
		
			$('#result1-7').text(finDealer1);
            $('#result2-7').text(finDealer2);
            $('#result3-7').text(finDealer3);
            $('#result4-7').text(finDealer4);
			$('#result5-7').text(finDealer5);

		/*	
            $('#result1-1').text(finDealer1);
            $('#result1-2').text(finDealer2);
            $('#result1-3').text(finDealer3);
            $('#result1-4').text(finDealer4);
			$('#result1-5').text(finDealer5);
			$('#result1-5').text(finDealer5);
			$('#result1-5').text(finDealer5);


            $('#result2-1').text(finDealer1);
            $('#result2-2').text(finDealer2);
            $('#result2-3').text(finDealer3);
            $('#result2-4').text(finDealer4);
            $('#result2-5').text(finDealer5);

            $('#result3-1').text(finDealer1);
            $('#result3-2').text(finDealer2);
            $('#result3-3').text(finDealer3);
            $('#result3-4').text(finDealer4);
            $('#result3-5').text(finDealer5);

            $('#result4-1').text(finDealer1);
            $('#result4-2').text(finDealer2);
            $('#result4-3').text(finDealer3);
            $('#result4-4').text(finDealer4);
            $('#result4-5').text(finDealer5);

            $('#result5-1').text(finDealer1);
            $('#result5-2').text(finDealer2);
            $('#result5-3').text(finDealer3);
            $('#result5-4').text(finDealer4);
            $('#result5-5').text(finDealer5);

*/
			$('#result1-1').text("Start");
            $('#result2-1').text("Start");
            $('#result3-1').text("Start");
            $('#result4-1').text("Start");
			$('#result5-1').text("Start");
		



    	});
    }

$('#playFancy').click(function() {
	//return false;

	post();
	
	
		$("p").removeClass('empty-space');
		$('.textCongrat').text("Congratulation!");
		
		
			var spd = new Array();
			var min = 10;
			var max = 20;
			var i = 0;
			for(i = 1 ; i <= 5 ; i++){
				
				rand_time = Math.floor(Math.random() * (max - min + 1)) + min;
				spd.push(rand_time);
				//console.log(rand_time);
			}
			
			roller1.setRandomize(7);
			roller2.setRandomize(7);
			roller3.setRandomize(7);
			roller4.setRandomize(7);
			roller5.setRandomize(7);
			
			roller1.shuffle(spd[0]);
			roller2.shuffle(spd[1]);
			roller3.shuffle(spd[2]);
			roller4.shuffle(spd[3]);
			roller5.shuffle(spd[4]);
		
		
		
		
	
	
	

	/*
	roller1.shuffle(12);
	roller2.shuffle(19);
	roller3.shuffle(17);
	roller4.shuffle(15);
	roller5.shuffle(10);
	*/

});	
