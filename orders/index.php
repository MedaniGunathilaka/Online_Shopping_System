<html>
<head>
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<style>

body{
	font-family: 'Montserrat', sans-serif;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #8c093f;
  border-radius: 5px 5px 0px 0px;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: sans-serif;
  font-size: 14px;
}

li a:hover {
  background-color: #4e0423;
}

.checked {
  color: orange;
}

.dropdown{
	position:relative;
	display:inline-block;

}

.dropdown-content{
	display:none;
	position:absolute;
	background-color:#f9f9f9;
	min-width:160px;
	box-shadow:0px 8px 16px 0px rgba(0,0,0,2);
	padding:12px 16px;
}
.dropdown:hover .dropdown-content{
	display:block;
}
.zoom:hover
{
transition:transform 0.6s;
transform:scale(1.07);
}
</style>
<title>My page</title>
</head>

<body>

<div style="width: 90%; margin: auto;">
<ul>
  <li><a class="active" href="../mainnewpage.html">HOME</a></li>
  <li><a href="view.php">VIEW ORDERS</a></li>
  <li><a href="update.php">UPADATE ORDERS</a></li>
  <li><a href="delete.php">DELETE ORDERS</a></li>
</ul>
 
<img src="banner.jpg" width="100%">
<br></br>
<table border="0" width="100%" bgcolor="white">
<tr>
<td colspan="5"><h2> Bags </h2><hr></td>
<tr>
<th><img src="bag1.jpg" width="75%" class="zoom"></th>
<th><img src="bag2.jpg" width="75%" class="zoom"></th>
<th><img src="bag3.jpg" width="75%" class="zoom"></th>
<th><img src="bag4.jpg" width="75%" class="zoom"></th>
</tr>
<tr>
<th>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star"></span> 
</th>

<th>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
</th>

<th>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star"></span> 
</th>
<th>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
</th>

<tr>
  <?php
  require_once '../dbconfig/config.php';
  $sql = "SELECT * FROM product  WHERE serial_no <=4";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo '
      <th><font color="red">Price: '.$row["price"].'/=</font></th>
      ';
    }
  }else{
    echo 'error';
  }
  ?>
</tr>

<tr>
  <?php
  $sql2 = "SELECT product_name FROM product WHERE serial_no <=4";
  $result = $conn->query($sql2);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo '
      <th><font color="green">'.$row["product_name"].'</font></th>
      ';
    }
  }else{
    echo 'error';
  }
  ?>
</tr>


<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>
<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>
<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>
<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>

</table>

<br></br>

<table border="0" width="100%" bgcolor="white">
<tr>
<td colspan="5"><h2>Earnings</h2><hr></td>
<tr>
<th><img src="earnings1.jpg" width="75%" class="zoom"></th>
<th><img src="earnings2.jpg" width="75%" class="zoom"></th>
<th><img src="earnings3.jpg" width="75%" class="zoom"></th>
<th><img src="earnings4.jpg" width="75%" class="zoom"></th>
</tr>
<tr>
<th>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
</th>
<th>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
</th>
<th>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange"></span>
<span class="fa fa-star"></span> 
</th>
<th>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
</th>

<tr>
  <?php
  $sql3 = "SELECT price FROM product  WHERE serial_no <= 8 AND serial_no >4";
  $result3 = $conn->query($sql3);
  if($result3->num_rows > 0){
    while($row = $result3->fetch_assoc()){
      echo '
      <th><font color="red">Price: '.$row["price"].'/=</font></th>
      ';
    }
  }else{
    echo 'error';
  }
  ?>
</tr>

<tr>
  <?php
  $sql2 = "SELECT product_name FROM product WHERE serial_no <= 8 AND serial_no >4";
  $result = $conn->query($sql2);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo '
      <th><font color="green">'.$row["product_name"].'</font></th>
      ';
    }
  }else{
    echo 'error';
  }
  ?>
</tr>


<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>
<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>
<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>
<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>
</table>

<br></br>

<table border="0" width="100%" bgcolor="white">
<tr>
<td colspan="5"><h2>Teddies</h2><hr></td>
<tr>
<th><img src="teddy1.jpg" width="75%" class="zoom"></th>
<th><img src="teddy2.jpg" width="75%" class="zoom"></th>
<th><img src="teddy3.jpg" width="75%" class="zoom"></th>
<th><img src="teddy4.jpg" width="75%" class="zoom"></th>
</tr>
<tr>
<th>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
</th>
<th>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
</th>
<th>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star checked" style="color:orange;"></span>
<span class="fa fa-star "></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
</th>
<th>
<span class="fa fa-star checked"  style="color:orange;"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span> 
</th>

<tr>
  <?php
  $sql3 = "SELECT price FROM product  WHERE serial_no <= 12 AND serial_no >8";
  $result3 = $conn->query($sql3);
  if($result3->num_rows > 0){
    while($row = $result3->fetch_assoc()){
      echo '
      <th><font color="red">Price: '.$row["price"].'/=</font></th>
      ';
    }
  }else{
    echo 'error';
  }
  ?>
</tr>

<tr>
  <?php
  $sql2 = "SELECT product_name FROM product WHERE serial_no <= 12 AND serial_no >8";
  $result = $conn->query($sql2);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo '
      <th><font color="green">'.$row["product_name"].'</font></th>
      ';
    }
  }else{
    echo 'error';
  }
  ?>
</tr>

<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>
<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>
<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>
<th><a href="place-order.html"><input type="button" value="Order" style="width:150px;height:30px;background-color:blue;color:white;"></a></th>
</table>


 <!-- Code for footer-->
<table border="3" width="100%" align="center">
<tr>
<td bgcolor="pink" width="50%"><font color="black"><b>Contact Us</b></font> </td>
<td bgcolor="pink" width="50%"><font color="black"><b>Follow us</b></font></td>
</tr>

<tr>
<td>
<ul>
<li>Cyber Warriors</li> 
<li>No.16,</li>
<li>South Adeliede,</li>
<li>Australia.</li>
</ul>





<td>
<ul>
<li>Facebook</li>
<li>Twitter</li>
<li>Instragram</li>
<li>You tube</li>
</ul>


</tr>

</table>
<!-- End of code forn footer-->
</div>
</body>
</html>



		




