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


$sql = "UPDATE mx_dealer SET ";
$sql .="LuckyFlag = '0' ";
$sql .="WHERE ID = '$n' ";

if (mysqli_query($conn, $sql)) {
    //echo "Record updated successfully";
}

 else {

    //echo "Error updating record: " . mysqli_error($conn);
}

$time_stamp = date('Y-m-j H:i:s');

$sql = "INSERT INTO activity_log (dealer_id, dealer_name, get_code, time_stamp)
VALUES ( '$n', '$dealer', '$randnum', '$time_stamp')";

if (mysqli_query($conn, $sql)) {
    
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// if($objQuery)
// {
//   echo "Save Done.";
// }
// else
// {
//  echo "Error Save [".$sql."]";
// }
$conn->close();

echo $randnum;
echo $dealer;



// $num = mysql_num_rows($result);
// echo $num;

// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "ID: " . $row["ID"]. " - Name: " . $row["Dealer"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

// echo $finNum;
// $message = "wrong answer";
// echo "<script type='text/javascript'>alert('$message');</script>";

// $sql = " SELECT ID FROM tb_Guest WHERE name = '$name' and surname = '$surname';  ";
// $result = mysql_query($sql);

// $num = mysql_num_rows($result);


// function numRand($numRand) {
//     echo $numRand;
// }

?>