<?php
include_once 'config.php';
$_SESSION["sess"] = MD5(time().mt_rand());
$se = $_SESSION["sess"];

//$numRand = $_POST['postnum'];
// echo $numRand;
$random_limit = 5;
$fake_random_limit = 10;


$arr = array();
$randnum = '';
$dealer = '';


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

$real_lucky = array_rand($arr, $random_limit); 
$fake_lucky = array_rand($arr, $fake_random_limit); 

foreach ($real_lucky as $value) {
    //echo $value . "<br>";
}

$dealer_temp = array();
$code_temp = array();

$dealer_fake_temp = array();
$code_fake_temp = array();



for($i = 0 ; $i < count($real_lucky) ; $i++  ){


                $sql = "SELECT * FROM mx_dealer_small WHERE ID = '{$real_lucky[$i]}' ";
               
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                        $randnum = $row['Code'];
                		$dealer = $row['Dealer'];
                        //array_push($dealer_temp ,$row['Code']);
                        array_push($dealer_temp ,$dealer);
                        


                    }
                } 

                else {

                    echo "0 results";
                }

			$time_stamp = date('Y-m-j H:i:s');


			$sql = "INSERT INTO activity_log (dealer_id, dealer_name, get_code, get_prize , time_stamp)
			VALUES ( '{$real_lucky[$i]}', '$dealer', '$randnum', '2' ,'$time_stamp')";

			if (mysqli_query($conn, $sql)) {
				
			} 
			else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
				
}

/// generate fake 
for($i = 0 ; $i < count($fake_lucky) ; $i++  ){


                $sql = "SELECT * FROM mx_dealer_small WHERE ID = '{$fake_lucky[$i]}' ";
               
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {

                        $randnum = $row['Code'];
                        $dealer = $row['Dealer'];
                        //array_push($dealer_temp ,$row['Code']);
                        array_push($dealer_temp ,$dealer);
                        


                    }
                } 

                else {

                    echo "0 results";
                }


}






$index = 0;
$res = json_encode($dealer_temp);
echo $res;





$conn->close();

//echo $randnum;
//echo $dealer;




?>