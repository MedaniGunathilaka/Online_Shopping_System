<?php require_once('../dbconfig/config.php');
?>
<?php
if(isset($_GET['serial_no'])){
$sql = "DELETE FROM product WHERE serial_no = ".$_GET['serial_no'];
mysqli_query($conn, $sql);
$result = mysqli_query($conn,$sql);
if($result){
//echo "Sucessfull";
}
else{

}
header("Location: product.php");
}
?>