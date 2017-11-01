
	var roller1 = $("#roller1").slotMachine({active : 0});
							
	function post() {
        $.post('get_small_prize_1.php', function (data) {   
        	
          	var i = 0;
           	var records = jQuery.parseJSON(data);
			console.log(records);

            result0 = "";	
            finDealer1 = records[0];
           
		//Real lucky
		
		
         	for(i = 1 ; i <= 1 ; i++) {
 				for(j = 1 ; j <= 15 ; j++) {
					if(j != 6){
					var class_name = "";
        			class_name = '#result' + i + "-" +j;   
        			//console.log(class_name);          	
        			$(class_name).text(records[j-1]);
        			
					}
				}         
   			}
		
			$('#result1-7').text(finDealer1);
          
		/*	
            

*/




    	});
    }

$('#playFancy').click(function() {
	//return false;

	post();
	var spd = new Array();
	var min = 10;
	var max = 20;
	var i = 0;
	for(i = 1 ; i <= 1 ; i++){
		rand_time = Math.floor(Math.random() * (max - min + 1)) + min;
		spd.push(rand_time);
		//console.log(rand_time);
	}
	
	roller1.setRandomize(6);
	
	
	roller1.shuffle(spd[0]);
	

	/*
	roller1.shuffle(12);
	roller2.shuffle(19);
	roller3.shuffle(17);
	roller4.shuffle(15);
	roller5.shuffle(10);
	*/

});	
