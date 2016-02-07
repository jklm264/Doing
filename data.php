<?php
$conn = new mysqli ('doingFsuHack.db.8377084.hostedresource.com', 'doingFsuHack','Hackit123!','doingFsuHack');
if($conn->connect_error){
	die("Connection_error:" . $conn->connect_error:)}
$result = $conn->query("SELECT evt_name FROM evts");
if($results->num_rows > 0){
	while($row = $result->fetch_assoc()){
			echo $row['evt_name']
	}
?>
	