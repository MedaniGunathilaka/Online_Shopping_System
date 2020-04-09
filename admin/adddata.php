<?php require_once('../dbconfig/config.php'); 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header("Location: ../registrationform/login.php");
}
?>
<?php
	if(isset($_POST['signB'])){

	$sql = "INSERT INTO product (serial_no,product_type,product_name,price,rating) VALUES ('".$_POST['serial_no']."','".$_POST['product_type']."','".$_POST['product_name']."','".$_POST['price']."','".$_POST['rating']."')";

	$result = mysqli_query($conn,$sql);
	if($result){
echo"<script> alert('add products successfully') </script>";
	header("Location: ./product.php");}
else
echo $conn -> error;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
	<form action="#" method ='POST'>
  <div class="container">
    <h1>add details</h1>
    <hr>

    <label for="serial no"><b>serial no</b></label>
    <input type="text" placeholder="serial no" name="serial_no" required>
	
	 <p>Please select the product type</p>
  <input type="radio" name="product_type" value="bags"> bags<br>
  <input type="radio" name="product_type" value="earrings"> earrings<br>
  <input type="radio" name="product_type" value="teddies"> teddies<br> 
  
  <br>
	
    <label for="product name"><b>product name</b></label>
    <input type="text" placeholder="product name" name="product_name" required>

    <label for="price"><b>price</b></label>
    <input type="text" placeholder="price" name="price" required>

    
	 <p>stars rating</p>
		<input type="radio" name="rating" value="5"> 5<br>
		<input type="radio" name="rating" value="4"> 4<br>
		<input type="radio" name="rating" value="3"> 3<br>
		<input type="radio" name="rating" value="2"> 2<br>
		<input type="radio" name="rating" value="1"> 1<br>
  <hr>
  <br>
		<input type="submit" class="registerbtn" name ="signB">
		<a href="product.php"><button type="button" class="registerbtn">view</button></a>
	</div>
</form>
</body>
</html>

