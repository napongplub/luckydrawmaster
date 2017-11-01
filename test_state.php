<html>
<head>
<title>Test sequence lucky draw</title>
    <meta http-equiv="Content-Type" content="text/html" charset=utf-8" />

</head>
<body>

	<h1>test sequence lucky draw</h1>
	<br>
	
	<h2 id="prize_name">พระบรมฉายาลักษณ์ ร.๙ พร้อมกรอบหลุยส์</h2>
	<p> running : <h2 id="running">0</h2></p>
    <p>all : <h2 id="all">12</h2></p>

	
	
    <input type="button" id="clear" value="CLEAR"/>
	<input type="button" id="run_state" value="RUN"/>


	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	
<script>

		 
		
		$('#clear').on( "click", function(){
			clear();
		});	
		
		$('#run_state').on( "click", function(){
			run_state();
			
		});

		function clear() {
   

            $.post('clear_running.php',{},
            function(data)
            {   
                alert("clear_success");
            });
        }
		
			function run_state() {
   

            $.post('prize_state.php',{},
            function(data)
            {   
			   var records = jQuery.parseJSON(data);

                console.log(records);
				
				 $('#prize_name').text(records[0]);
				 $('#running').text(records[1]);
				 $('#all').text(records[2]);
            });
        }

</script>
	
</body>
</html>