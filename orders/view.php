<?php require_once('../dbconfig/config.php'); 
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome user to the  area, " . $_SESSION['username'] . "!";
} else {
    header("Location: ../registrationform/login.php");
}
?>
<?php 

$sql_query = "SELECT * FROM orders";
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
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
  <table id="data_table" class="table table-striped">
    <thead>
      <tr>
        <th>Order Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>ID No</th>
        <th>Address</th>
        <th>Email</th>  
        <th>Telephone</th>
        <th>Item No</th>
        <th>No of Items</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
      while( $developer = mysqli_fetch_assoc($resultset) ) {
      ?>
         <tr>
        <td><?php echo $developer ['OrderID']; ?></td>
         <td><?php echo $developer ['fName']; ?></td>
         <td><?php echo $developer ['lName']; ?></td>
         <td><?php echo $developer ['idNo']; ?></td>
         <td><?php echo $developer ['address']; ?></td>   
         <td><?php echo $developer ['email']; ?></td>
         <td><?php echo $developer ['tpNo']; ?></td> 
         <td><?php echo $developer ['itemNo']; ?></td>
         <td><?php echo $developer ['numberOfItems']; ?></td> 
         </tr>
      <?php } ?>
    </tbody>
    </table>
    <button><a href="index.html">Go Back</a></button>
</div>
</body>
</html>

