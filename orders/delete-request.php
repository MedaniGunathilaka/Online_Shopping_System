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

a{
  color: white;
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

<div class="container home">  

 
<?php
$orderid = mysqli_real_escape_string($conn, $_REQUEST['orderid']);

// Attempt insert query execution

$sql = "DELETE FROM orders WHERE OrderID=$orderid;";

if(mysqli_query($conn, $sql)){
    echo "Order deleted successfully.";
} else{
    echo "ERROR: Could not delete your order $sql. " . mysqli_error($conn);
}

?>
<button><a href="index.html">Go to Home</a></button>
</div>
</body>
</html>