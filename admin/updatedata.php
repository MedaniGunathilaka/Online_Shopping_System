<?php 
require_once('../dbconfig/config.php'); 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header("Location: ../registrationform/login.php");
}
?>


<?php
if(isset($_GET['serial_no'])){
$sql1 = "SELECT * FROM product WHERE serial_no =".$_GET['serial_no'];
$result = mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);
if($result){


}
//echo "Sucessfull";
else{
echo"failed";	
}

}

if(isset($_POST['updateB'])){
$sql2 = "UPDATE product SET product_type = '".$_POST['product_type']."',product_name = '".$_POST['product_name']."',price = '".$_POST['price']."',rating= '".$_POST['rating']."' WHERE  serial_no='".$_POST['serial_no']."'";
$result2 = mysqli_query($conn,$sql2);

$sql3 = "SELECT * FROM product WHERE serial_no =".$_POST['serial_no'];
$result3 = mysqli_query($conn,$sql3);
$row=mysqli_fetch_assoc($result3);
echo"<script> alert('Updated Sucessfully') </script>";

}
if(!isset($_GET['serial_no'])&&!isset($_POST['updateB'])){
header("Location: product.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="main.css">
	<title></title>
	<table>
		<tr>
			<td>serial no</td>
			<td>product type</td>
			<td>product name</td>
			<td>price</td>
			<td>rating</td>

		</tr>
		<form action='updatedata.php' method ='POST'>
			<tr>
			<?php
			echo "<td><input type = 'text' name='serial_no' required value =".$row['serial_no']." ></td>";
			echo "<td><input type = 'text' name='product_type' required value =".$row['product_type']."></td>";
			echo "<td><input type = 'text' name='product_name' required value =".$row['product_name']."></td>";
			echo "<td><input type = 'text' name='price' required value =".$row['price']."></td>";
			echo "<td><input type = 'text' name='rating' required value =".$row['rating']."></td>";
			?>
		</tr>
		<tr>
			<td colspan =3><input type='submit' value="Update" name='updateB'></td>
			<td colspan =3><a href="product.php"><button type="button">view</button></a></td>
		</tr>
		</form>
	</table>
</head>
<body>
	
</body>
</html>