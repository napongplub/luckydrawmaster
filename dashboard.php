<?php
include_once 'config.php';



$big_prize_count = array();
$small_prize_count = array();
$all_dealer = array();
$all_lucky = array();
$remaining_lucky = array();


/// BIG 

	$sql = "SELECT * FROM mx_dealer WHERE LuckyFlag = 1 ";
	$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					 array_push($big_prize_count,$row['ID']);
				}
			} 

			else {

				echo "0 results";
			}

			echo " Big Prize : " . count($big_prize_count) . " / 545" . "<br>";


/// SMALL

	$sql = "SELECT * FROM mx_dealer_small WHERE LuckyFlag = 1 ";
	$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					 array_push($small_prize_count,$row['ID']);
				}
			} 

			else {

				echo "0 results";
			}

			echo "Small Prize : " . count($small_prize_count) . " / 127". "<br>";

		$sql = "SELECT count(Dealer) as num, Dealer 
		from mx_dealer 
		WHERE LuckyFlag = 1 
		GROUP by Dealer 
		order by num desc";
		
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
					 echo $row['Dealer'] . " | " . $row['num'] . "<br>" ;
				}
			} 

			else {

				echo "0 results";
			}
			
		

	
?>