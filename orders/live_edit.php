<?php

include_once('../dbconfig/config.php');
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the admin area, " . $_SESSION['username'] . "!";
} else {
    header("Location: ../registrationform/login.php");
} 

$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['fName'])) {
		$update_field.= "fName='".$input['fName']."'";
	} else if(isset($input['lName'])) {
		$update_field.= "lName='".$input['lName']."'";
	} else if(isset($input['idNo'])) {
		$update_field.= "idNo='".$input['idNo']."'";
	} else if(isset($input['address'])) {
		$update_field.= "address='".$input['address']."'";
	} else if(isset($input['email'])) {
		$update_field.= "email='".$input['email']."'";
	}	
	if($update_field && $input['id']) {
		$sql_query = "UPDATE orders SET $update_field WHERE OrderID='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}


