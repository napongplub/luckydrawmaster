<?php
include_once 'config.php';

$sql = "SELECT * from activity_log order by time_stamp desc";
$result = $conn->query($sql);
$index = 0;
$dealer_name = array();

$sqn = array();
$dealer_name = array();
$get_code = array();
$get_prize = array();
$timestamp = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
         
         
         array_push($dealer_name,$row['dealer_name']);
		 array_push($get_code,$row['get_code']);
		 array_push($get_prize, $row['get_prize']);
		 array_push($timestamp, $row['time_stamp']);
		 
    }
} 

else {

    echo "0 results";
}
?>