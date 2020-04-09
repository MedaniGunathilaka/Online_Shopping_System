<?php require_once('../dbconfig/config.php'); 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the admin area, " . $_SESSION['username'] . "!";
} else {
    header("Location: ../registrationform/login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>123</title>
<style type="text/css">
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

input[type=submit] , button{
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

a{
  color: white;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
</head>
<body>

<div class="container home">
      <?php
  

$orderid = mysqli_real_escape_string($conn, $_REQUEST['orderid']);
$fName = mysqli_real_escape_string($conn, $_REQUEST['firstname']);
$lName = mysqli_real_escape_string($conn, $_REQUEST['lastname']);
$idNo = mysqli_real_escape_string($conn, $_REQUEST['idNo']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$tpNo = mysqli_real_escape_string($conn, $_REQUEST['tnumber']);
$itemNo = mysqli_real_escape_string($conn, $_REQUEST['oitem']);
$numberOfItems = mysqli_real_escape_string($conn, $_REQUEST['nitem']);

// Attempt insert query execution

$sql = "UPDATE orders SET fName = '$fName',
lName = '$lName',
idNo = '$idNo',
address = '$address',
email = '$email',
tpNo = '$tpNo',
itemNo = '$itemNo',
numberOfItems = '$numberOfItems'

WHERE OrderID = '$orderid';";

if(mysqli_query($conn, $sql)){
    echo "Order updated successfully.";
} else{
    echo "ERROR: Could not update your order $sql. " . mysqli_error($conn);
}

?>
<button><a href="index.html">Go to Home</a></button>
</div>
</body>
</html>