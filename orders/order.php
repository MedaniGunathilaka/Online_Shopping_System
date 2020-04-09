<?php require_once('../dbconfig/config.php'); 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the User area, " . $_SESSION['username'] . "!";
} else {
    header("Location: ../registrationform/login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

</body>
</html>

<?php

 

$fName = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
$lName = mysqli_real_escape_string($conn, $_REQUEST['lastname']);
$idNo = mysqli_real_escape_string($conn, $_REQUEST['idNo']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$tpNo = mysqli_real_escape_string($conn, $_REQUEST['tnumber']);
$itemNo = mysqli_real_escape_string($conn, $_REQUEST['oitem']);
$numberOfItems = mysqli_real_escape_string($conn, $_REQUEST['nitem']);

// Attempt insert query execution
$sql = "INSERT INTO orders(fName, lName, idNo, address, email, tpNo, itemNo,numberOfItems) VALUES ('$fName', '$lName', '$idNo', '$address', '$email', '$tpNo', '$itemNo', '$numberOfItems')";
if(mysqli_query($conn, $sql)){
    echo "Order placed successfully.";
} else{
    echo "ERROR: Could not place your order $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
