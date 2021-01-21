<?php 
include('connection.php'); 

$json = file_get_contents('php://input');

$data = json_decode($json, false);

$fname =  ($data->first_name);
$lname =  ($data->last_name);
$email =  ($data->email);
$phone =  ($data->phone);
$address =  ($data->address);



$sql = "INSERT INTO users (first_name, last_name, email, phone, address)
VALUES ('$fname', '$lname','$email','$phone','$address')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


 

?>