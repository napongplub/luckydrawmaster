<?php
include_once 'config.php';
$current_state = "";

$prize_id = "";
$prize_name = "";
$qty = "";
$running = "";
$sql = "SELECT * FROM mx_state";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

      $current_state = $row['current_state'];
	
	
    }
} 

else {

		echo "0 results";
}


$res = array();

$sql = "SELECT * FROM mx_prize where state = {$current_state}";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
			$prize_id = $row['ID'];
			$prize_name = $row['prize_name'];
			$running = $row['running'];
			$qty = $row['qty'];
	

	 
    }
} 

else {

		echo "0 results";
}

$running = $running + 1;

if ($running > 0){
	
	
	$sql = "UPDATE mx_prize SET running =  $running where state = $current_state";

			if (mysqli_query($conn, $sql)) {
				
				
			} 
			
			else {
				echo "Error updating record: " . mysqli_error($conn);
			}
	if($running == $qty){
		
			$current_state = $current_state + 1;
			$sql = "UPDATE mx_state SET current_state = $current_state";

			if (mysqli_query($conn, $sql)) {
				
				
			} 
			
			else {
				echo "Error updating record: " . mysqli_error($conn);
			}
		
	}
	
}

array_push($res, $prize_name);
array_push($res, $running);
array_push($res, $qty);
$res = json_encode($res);
echo $res;

//echo "state : " . $current_state . "<br>";
//echo "name : " . $prize_name . "<br>";
$conn->close();

?>