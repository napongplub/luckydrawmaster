<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Lucky Draw</title>
        <!--
        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        -->
        <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" >
        <link type="text/css" rel="stylesheet" href="assets/css/style1.css" >
        <link type="text/css" rel="stylesheet" href="assets/css/css.css" >
        <!--
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide" >
        -->
		<style>
			.btn-app {
				width: 180px;
				height: 180px;
				background: black;
				border: 10px solid gold;
				
			}
			
			.btn-app:hover {
				width: 180px;
				height: 180px;
				background: gold;
				border: 10px solid black;
				
			}
			
			
			.btn-app:hover span#bg,
			.btn-app:hover span#sm			{
				color: black;
			}
			
			.btn-app span#bg {
				color: gold; 
				font-size: 80px;				
			}
			
			.btn-app span#sm {
				color: gold; 
				font-size: 50px;				
			}
			
			/*
			
			.btn-app span#bg:hover {
				color: black; 
				font-size: 80px;				
			}
			
			.btn-app span#sm:hover {
				color: black; 
				font-size: 50px;				
			}
			*/
			
		</style>
    </head>
    <body>
        <div id="Wrapper">
            <div class="container-fluid">
                <div class="header-space text-center">
                    <img src="assets/img/maxxis_bg_2560x1440.png" alt="" class="logo" style="width: 100% !important; padding: 0; margin: 0;">
                </div>
                <div class="content-space text-center">
                </div>            
                <div class="footer-space text-center" style="position: absolute; bottom: 20px; width: 95%;">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-lg btn-app" id="btn_lg"  >
							<span class="glyphicon glyphicon-gift" id="bg"></span>
						</button>
                    </div>          
                    <div class="col-md-6">
                        <button type="button" class="btn btn-lg btn-app" id="btn_sm" >
							<span class="glyphicon glyphicon-gift" id="sm"></span>
						</button>
                    </div>
                </div> 
            </div>
        </div>
        <!--
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        -->
        <script type="text/javascript" charset="utf-8" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="assets/js/bootstrap.min.js"></script>
        <!--
        <script type="text/javascript" charset="utf-8" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        -->
        <script type="text/javascript" charset="utf-8" src="assets/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" charset="utf-8" src="assets/js/jquery.jSlots.js"></script>
        <script type="text/javascript" charset="utf-8" src="assets/js/jquery.jSlots.min.js"></script>
		<script>
			var url = '';
			$( document ).ready(function() {
				console.log( "ready!" );
				$("#btn_lg").on('click', function() {
					url = 'lucky_big.php';
					window.location = url;
				});
				$("#btn_sm").on('click', function() {
					
					url = 'lucky_small_5.php';
					window.location = url;
				});
			});
		
		</script>		
    </body>

</html>
