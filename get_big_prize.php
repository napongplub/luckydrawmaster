<?php
include_once 'config.php';
$_SESSION["sess"] = MD5(time().mt_rand());
$se = $_SESSION["sess"];

//$numRand = $_POST['postnum'];
// echo $numRand;



$arr = array();
$randnum = '';
$dealer = '';


$sql = "SELECT * FROM mx_dealer WHERE LuckyFlag = 1 ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         array_push($arr,$row['ID']);
    }
} 

else {

    echo "0 results";
}

$n = array_rand($arr,1);

$sql = "SELECT * FROM mx_dealer WHERE ID = '$n' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $randnum = $row['Code'];
		$dealer = $row['Dealer'];

    }
} 

else {

    echo "0 results";
}


$sql = "UPDATE mx_dealer SET LuckyFlag = 0 WHERE ID = '{$n}'";

			if (mysqli_query($conn, $sql)) {
				
				
			} 
			
			else {
				echo "Error updating record: " . mysqli_error($conn);
			}

// prize state

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

/////
$insert_prize_name = $prize_name . '-' . $running;
/// activity_log
$time_stamp = date('Y-m-j H:i:s');

$sql = "INSERT INTO activity_log (dealer_id, dealer_name, get_code, get_prize, time_stamp)
VALUES ( '$n', '$dealer', '$randnum', '$insert_prize_name' ,'$time_stamp')";

if (mysqli_query($conn, $sql)) {
    
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$conn->close();

array_push($res, $prize_name);
array_push($res, $running);
array_push($res, $qty);
array_push($res, $randnum);
array_push($res, $dealer);

$res = json_encode($res);
echo $res;

?>