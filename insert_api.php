<?php 
include 'connect.php';
       
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json; charset=UTF-8");
    $data = json_decode(file_get_contents("php://input"), true);        //reading data in json


        $title = $data['title'];
        $fname = $data['first_name'];
        $lname = $data['last_name'];
        $gender = $data['gender'];
        $address =  $data['address'];
        $address2 =  $data['address2'];
        $city = $data['city'];
        $state = $data['state'];
        $zip = $data['zip'];
        $textarea = $data['textarea'];
  
       $sql = "INSERT INTO task (title, first_name, last_name, gender, address, address2, city, state, zip, textarea) 
       VALUES ('$title', '$fname', '$lname', '$gender', '$address', '$address2', '$city', '$state', '$zip', '$textarea')";  
       $res = mysqli_query($connection, $sql);
       
       if($res){
        echo json_encode(array('message' => 'Record Inserted.', 'status' => true));
       }else{
           echo json_encode(array('message' => 'No record found.', 'status' => false));
       }
?>