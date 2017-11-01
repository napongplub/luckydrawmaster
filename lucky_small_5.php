<!DOCTYPE>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Maxxis Small Prize</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css" >
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />-->
		<link rel="stylesheet" href="assets/css/style2.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="assets/dist/jquery.slotmachine.css" type="text/css" media="screen" />
		
		
		
		
<!--
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
-->
	
		<link type="text/css"  href="assets/css/style1.css" rel="stylesheet">




		<link rel="stylesheet" href="assets/dist/jquery.slotmachine.css" type="text/css" media="screen" />
		
		
<!--
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
-->


	</head>
	<body>
	<div id="Wrapper">
		<div class="container-fluid">
			<div class="header-space text-center">
			
				<img src="assets/img/logo_backdrop.png" alt="" class="logo" style="width: 50%;">
				<br><br><br><br>

				<?php 
				for($i = 1 ; $i <= 5 ; $i++ ) {
				?>
				<div id="plane" class="container">
					<div class="row content">
						<div class="col-md-2 col-lg-8 col-lg-offset-2">					
							<div id="<?= 'roller' . $i ?>">
								<div id="result-start" class="text-center"> 										      	
								.
								</div>

								<?php 

								for($j = 0 ; $j <= 15 ; $j++ ) {

								?>

								<div id="<?= 'result'. $i  ."-". $j ?>" class="text-center"> 
								<?php 
									

										echo "Random";


									
								?>
									

								</div>

								<?php
								}
								?>

								<div id="result-end" class="text-center"> 										      	
								.
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php 
				}
				?>
			</div>
			<input type="button" id="playFancy" value="" class="spin-btn text-white">
		</div>
		
		<footer id="Footer" class="clearfix is-sticky">
			<div class="row" style="padding-top: 55px;">
				<div class="col-md-6">                      
				<a href="lucky_small_5.php" class="trans-btn text-white footer-btn">
					<img src="assets/img/switch-btn-Reset.png"></img>
				</a>
				<div style="color : #FFF; margin-left: 100px; ">
							<div style="float : left;">luckydrawช่วงที่1&nbsp; 	
พระบรมฉายาลักษณ์ ร.๙ พร้อมกรอบทอง</div>
							
						</div>	
				</div>
				<div class="col-md-6 text-right">
				<a href="index.php" class=" trans-btn text-white footer-btn">
					<img src="assets/img/switch-btn-Home.png"></img>
				</a>
				</div>
			</div>
		</footer>        
	</div>
	
	<script type="text/javascript" charset="utf-8" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="assets/js/bootstrap.min.js"></script>
	
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
	<script type="text/javascript" src="assets/dist/jquery.slotmachine.js"></script>
	<script type="text/javascript" src="assets/dist/luckydraw_master_5.js"></script>
</body>
</html>
