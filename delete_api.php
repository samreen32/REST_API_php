<?php
    include 'connect.php';
	header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: DELETE');
    header("Content-Type: application/json; charset=UTF-8");
	$data = json_decode(file_get_contents("php://input"), true);        //reading data in json

	$id = $data['id'];
	$sql = "DELETE FROM task WHERE id = {$id}";
	$res = mysqli_query($connection, $sql);
	if($res){
		echo json_encode(array('message' => 'Record Deleted', 'status' => true));
	}else{
		echo json_encode(array('message' => 'No record found', 'status' => false));
	}
?>
