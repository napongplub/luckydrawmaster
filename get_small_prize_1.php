<?php
include_once 'config.php';
$_SESSION["sess"] = MD5(time().mt_rand());
$se = $_SESSION["sess"];

//$numRand = $_POST['postnum'];
// echo $numRand;



$arr = array();
$randnum = '';
$dealer = '';

$dealer_temp = array();



$sql = "SELECT * FROM mx_dealer_small WHERE LuckyFlag = 1 ";
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
$fake_lucky = array_rand($arr, 14); 

$sql = "SELECT * FROM mx_dealer_small WHERE ID = '$n' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

       
		$dealer = $row['Dealer'];
		$randnum = $row['Code'];
		 array_push($dealer_temp,$dealer);

    }
} 

else {

    //echo "0 results";
}


$sql = "UPDATE mx_dealer_small SET LuckyFlag = 0 WHERE ID = '$n'";

			if (mysqli_query($conn, $sql)) {
				
				
			} 
			
			else {
				echo "Error updating record: " . mysqli_error($conn);
			}

// prize state




/// activity_log
$time_stamp = date('Y-m-j H:i:s');

$sql = "INSERT INTO activity_log (dealer_id, dealer_name, get_code, get_prize, time_stamp)
VALUES ( '$n', '$dealer', '$randnum', 'Gold Master จี้ทองคำ 99.99%' ,'$time_stamp')";

if (mysqli_query($conn, $sql)) {
    
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//generate fake_lucky
for($i = 0 ; $i < count($fake_lucky) ; $i++  ){


                $sql = "SELECT * FROM mx_dealer_small WHERE ID = '{$fake_lucky[$i]}' ";
               
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                        
                        //array_push($dealer_temp ,$row['Code']);
                        array_push($dealer_temp , $row['Dealer']);
                        


                    }
                } 

                else {

                    //echo "0 results";
                }


}


$conn->close();

$res = json_encode($dealer_temp);
echo $res;
?>