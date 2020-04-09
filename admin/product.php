<?php require_once('../dbconfig/config.php'); 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header("Location: ../registrationform/login.php");
}
?>

<!DOCTYPE html>
<html>
<?php
$sql = "SELECT * FROM product";
mysqli_query($conn, $sql);
$result = mysqli_query($conn,$sql);

if($result){
//echo "Sucessfull";
}
else{
echo"failed";	
}




?>

<head>
	
	<title></title>
	<link rel="stylesheet" type="text/css" href="main.css">
	</head>
<body>
	<table border=1 padding=00px>
		<tr bgcolor=#4CAF50 font color= white>
			<td>serial no</td>
			<td>product type</td>
			<td>product name</td>
			<td>price</td>
			<td>rating</td>
			<td>update</td>
			<td>delete</td
		</tr>
		<?php
		while($row=mysqli_fetch_assoc($result)){
			?>
		
			<tr>
			<td style="color:white"><?php echo $row['serial_no'] ?></td>
			<td style="color:white"><?php echo $row['product_type'] ?></td>
			<td style="color:white"><?php echo $row['product_name'] ?></td>
			<td style="color:white"><?php echo $row['price'] ?></td>
			<td style="color:white"><?php echo $row['rating'] ?></td>
			<?php echo "<td style='color:white'><a href =updatedata.php?serial_no='".$row['serial_no']."' style='color:white'> update </a> </td>"?>
			<?php echo "<td style='color:white'><a href =deletedata.php?serial_no='".$row['serial_no']."' style='color:white'> delete </a> </td>"?>
		</tr>
		<?php
	}
	?>
		
	</table>
		<br><a href="adddata.php"><button type="button">Add</button></a>
	
</body>
</html>

