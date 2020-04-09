<?php
   require_once('../dbconfig/config.php'); 
?>

<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color:black">
    <div id="main-wrapper">
    <center><h2>Registration Form</h2>
    <img src="images/img.png" class="img"/>
    </center>

    <form class="myform" action="register.php" method="post">
        <label><b>Username:</b></label><br>
        <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
        <label><b>Password:</b></label><br>
        <input name="password" type="password" class="inputvalues" placeholder="Type password"required/><br>
        <label><b>Confirm Password:</b></label><br>
        <input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password"required/><br>
        <select name="role">
            <option value="0">Customer</option>
            <option value="1">Admin</option>
           
        </select>
        <input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
        <a href="login.php"><input type="button" id="back_btn" value="Back"/><br>
        
        </form>
    <?php
        if(isset($_POST['submit_btn'])){
            //echo '<script type="text/javascript"> alert("signup button clicked") </script>';
            $username = $_POST['username'];
            $password = $_POST['password'];
            $cpassword  = $_POST['cpassword'];
            $role  = $_POST['role'];
           

            if($password==$cpassword){
                $sql="select * from users WHERE username='$username'";
                
                $sql_run = mysqli_query($conn,$sql);
                

                

                if(mysqli_num_rows($sql_run)>0){
                    //there is already a user with the same user name
                    echo '<script type="text/javascript"> alert ("user already exist... Try another username") </script>';
                    
                }
                else{
                    $query="INSERT INTO users(username, password, role) VALUES ('$username','$password', '$role')";
                   
                    $query_run = mysqli_query($conn,$query);   
                    
                    if($query_run){
                        echo '<script type="text/javascript"> alert ("user Registerd sucessfully...") </script>';
                    }else{
                        echo '<script type="text/javascript"> alert ("Error!") </script>';

                    }
                
                }
            }
        }
    ?>  
    </div>

    

</body>
</html>