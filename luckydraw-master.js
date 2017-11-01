alert("check");

/*	
	var slot1 = $("#slot1").slotMachine({active	: 0});
	var slot2 = $("#slot2").slotMachine({active	: 0});
	var slot3 = $("#slot3").slotMachine({active	: 0});
	var slot4 = $("#slot4").slotMachine({active	: 0});
	var slot5 = $("#slot5").slotMachine({active	: 0});							
								
	function post() {
        $.post('get_small_prize.php', function (data) {   
           let i = 0;
           let records = jQuery.parseJSON(data);
           result0 = "";
        

         	for(i = 1 ; i <= 5 ; i++) {
 				for(j = 1 ; j <= 5 ; j++) {
        			let class_name = '#result' + i + "-" +j;             	
        			$(class_name).text(records[i-1]);
					}         
   			}
    	});
    }

$('#playFancy').click(function() {
	return false;

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
	
	slot1.setRandomize(1);
	slot2.setRandomize(2);
	slot3.setRandomize(3);
	slot4.setRandomize(4);
	slot5.setRandomize(5);

	slot1.shuffle(rand_time[0]);
	slot2.shuffle(rand_time[1]);
	slot3.shuffle(rand_time[2]);
	slot4.shuffle(rand_time[3]);
	slot5.shuffle(rand_time[4]);
});	
*/
							

