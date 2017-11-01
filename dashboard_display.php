<?php include_once 'activitylog.php'; ?>

<html>
<head>
<title>Activity Log</title>
</head>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}
</style>
<body>

<h2>รายชื่อผู้ได้รับรางวัลงาน Maxxis</h2>
<table style="width:100%">
  <tr>
    
    <th>ชื่อผู้รับรางวัล</th>
	<th>หมายเลขสิทธิ</th>
    <th>รางวัล</th>
	<th>เวลา</th>
   
  </tr>

	<?php for($i=0 ; $i< count($dealer_name) ; $i++){
		
	?>
	<tr>
    
    <td> <?= $dealer_name[$i] ?></td>
	<td><?= $get_code[$i] ?></td>
    <td><?= $get_prize[$i] ?></td>
	<td><?= $timestamp[$i] ?></td>
    </tr>
    <?php
	}
		
	?>
 
</table>

</body>
</html>