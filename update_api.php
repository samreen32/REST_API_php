<?php 
      include 'connect.php';
      header('Access-Control-Allow-Origin: *');
      header('Access-Control-Allow-Methods: PUT');
      header("Content-Type: application/json; charset=UTF-8");
      header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
      $data = json_decode(file_get_contents("php://input"), true);     //reading data in json

      
        $id = $data['id'];     
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
   
      $sql = "UPDATE task SET title='{$title}', first_name='{$fname}', last_name='{$lname}', 
      gender='{$gender}', address='{$address}', address2='{$address2}', city='{$city}', 
      state='{$state}', zip='{$zip}', textarea='{$textarea}' WHERE id={$id}";
      $res = mysqli_query($connection, $sql);
      
     if($res){
      echo json_encode(array('message' => 'Record Updated.', 'status' => true));
     }else{
         echo json_encode(array('message' => 'No record found.', 'status' => false));
     }

?>