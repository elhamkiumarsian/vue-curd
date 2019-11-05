<?php
include "config.php";

$data = json_decode(file_get_contents("php://input"));

$request = $data->request;

// Fetch All records
if($request == 1){
	$userData = mysqli_query($con,"select * from users order by id desc");

	$response = array();
	while($row = mysqli_fetch_assoc($userData)){
	    $response[] = $row;
	}

	echo json_encode($response);
	exit;
}

//update user
if($request == 2){

	$id = $data->id;
	$name = $data->name;
	$email = $data->email;

	mysqli_query($con,"UPDATE users SET name='".$name."',email='".$email."' WHERE id=".$id);
		 
	echo "Update record";
	exit;
}
