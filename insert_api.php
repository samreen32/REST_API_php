<?php 
include 'connect.php';

if(isset($_REQUEST['submit']) || $_SERVER["REQUEST_METHOD"] == 'POST') {
       
   header('Content-Type: application/json');
   $data = json_decode(file_get_contents("php://input"), true);        //reading data in json

   if(empty($data)){
    // $extra = array(
        $title = $_POST['title'];
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $gender = $_POST['gender'];
        $address =  $_POST['address'];
        $address2 =  $_POST['address2'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $zip = $_POST['zip'];
        $textarea = $_POST['textarea'];
    // );
    //    $data[] = $extra;
    //    json_encode($data);
       $sql = "INSERT INTO task (title, first_name, last_name, gender, address, address2, city, state, zip, textarea) 
       VALUES ('$title', '$fname', '$lname', '$gender', '$address', '$address2', '$city', '$state', '$zip', '$textarea')";  
       $res = mysqli_query($connection, $sql);
       
       if($res){
        echo json_encode(array('message' => 'Record Inserted.', 'status' => true));
        header("Location: insert_form.php");
       }else{
           echo json_encode(array('message' => 'No record found.', 'status' => false));
       }
   }else{
    echo "Not inserted";
   }

}
?>

