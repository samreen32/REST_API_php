<?php
    include 'connect.php';
	header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");
	$data = json_decode(file_get_contents("php://input"), true);        //reading data in json

	$id = $data['id'];
	$sql = "SELECT * FROM task WHERE id = {$id}";
	$res = mysqli_query($connection, $sql);
	if(mysqli_num_rows($res) > 0){
		$output = mysqli_fetch_all($res, MYSQLI_ASSOC);
		echo json_encode($output);
	}else{
		echo json_encode(array('message' => 'No record found', 'status' => false));
	}
?>
