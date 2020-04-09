<?php
    session_start();
    require '../dbconfig/config.php';
?>

<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color:black">
    <div id="main-wrapper">
    <center><h2>Login Form</h2>
    <img src="images/img.png" class="img"/>
    </center>

    <form class="myform" action="login.php" method="post">
        <label><b>Username:</b></label><br>
        <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
        <label><b>Password:</b></label><br>
        <input name="password" type="password" class="inputvalues" placeholder="Type your password" required/><br>
        <input name="login" type="submit" id="login_btn" value="Login"/><br>
        <a href="register.php"><input type="button" id="register_btn" value="Register"/><br>
        
    </form>

    <?php
            if(isset($_POST['login'])){
                
                $username = $_POST['username'];
                $password = $_POST['password'];
                
    
                
                    $query="SELECT * from users WHERE username='$username' AND password='$password'";
                    
                    // $userType = "SELECT role from user WHERE username ='$username'";
                    // $sql = mysqli_query($conn,$sql);
                    $query_run = mysqli_query($conn,$query);

                   
                   
                    if(mysqli_num_rows($query_run)>0){
                        //valid
                        $_SESSION['username']=$username;
                        $_SESSION['loggedin']=true;
                        while($row = mysqli_fetch_assoc($query_run)) {
                            if($row['role'] == 1){
                                header("Location: ../mainnewpage.html");
                            }
                            else if($row['role'] == 0){
                                header("Location: ../admin/admin.php");
    
                            }
                            else{
                                header("Location: ../index.html");
                            }
                         }
                        
                        //echo '<script type="text/javascript"> alert ("Logged in") </script>';
                       
                        
                    }else{
                        //invalid
                        echo '<script type="text/javascript"> alert ("Invalid credential") </script>';
                    }
                
            }

    ?>
    </div>

    

</body>
</html>