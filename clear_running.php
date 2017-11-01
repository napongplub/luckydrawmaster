<?php

include_once 'config.php';
$sql = 'UPDATE mx_prize set running = 0';
	
	if (mysqli_query($conn, $sql)) {
				
				echo "clear OK";
			} 
			
			else {
				echo "Error updating record: " . mysqli_error($conn);
			}

$sql = 'UPDATE mx_state set current_state = 1';
	
	if (mysqli_query($conn, $sql)) {
				
				echo "clear OK";
			} 
			
			else {
				echo "Error updating record: " . mysqli_error($conn);
			}

$sql = 'delete from activity_log where 1';

	if (mysqli_query($conn, $sql)) {
			
			echo "delete OK";
	}
	else {
			echo "Error delete";
		
	}



?>