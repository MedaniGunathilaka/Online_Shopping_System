<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "Welcome to the admin area, " . $_SESSION['username'] . "!";
} else {
    header("Location: ../registrationform/login.php");
}
?>
<html>
     <head>
        <title>Admin : Edit</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        
       <style>

            h1{
                padding: 15px;
                font-size: 50px;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            
            p{
                font-size:20px;
            }
			body{
				background_color:lightblue;
			}

            h2{
                color: black;
                font-size: 30px;
            }
   
            footer {
                position: absolute;
                bottom: 12;
                width: 100%;
                height: 50px;
            }
       

        </style>
     </head>
     <body>
        <nav id="nav">

            <div class="topBar">
                <div class="topBarItems">
                <form class="myform" action="admin.php" method="post">
        
        
        <input name="logout" type="submit" id="logout_btn" value="Log Out"/><br>
        
        
        </form>
                </div>
                
            </div>

            <div class="navMain">
   
                <div class="navMainItems">
                    <div class="navMainItem">
                            <a href="../mainnewpage.html" class="button">Home</a>
                    </div>
                    <div class="navMainItem">
                            <a href="../about.html" class="button">About us</a>
                    </div>
                    <div class="navMainItem">
                            <a href="#"  class="button">Edit</a>
                    </div>
                </div>
            </div>

        </nav>
         
       
        
        <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:160px;" id="mySidebar">
             <h2><b>admin</b></h1>
            <a  class="w3-bar-item button2" name="add" onclick="self.frames['ifadmin'].location.href ='product.php';"><b>product list</b></a>
            <a  class="w3-bar-item button2" name="add" onclick="self.frames['ifadmin'].location.href ='../orders/view.php';"><b>order history</b></a>
            <a  class="w3-bar-item button2" name="add" onclick="self.frames['ifadmin'].location.href ='adddata.php';"><b>add details</b></a>
            
</div>
       
        <p style="font-size:50px;color:rgba(255, 255, 255, .4); ">
        <iframe name="ifadmin" width ="87%" height="80%"style="float:right; margin-top:-50px;"></iframe>

        <script>
            function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            }
            function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            }
        </script>





</body>
</html>

<?php
            if(isset($_POST['logout']))
            {
            session_destroy();
            header('location:../registrationform/login.php');
            }
            ?>
