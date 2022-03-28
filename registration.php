<?php
    include 'dbconn.php';
    if(isset($_POST['register'])){
        $name=$_POST['username'];
        $email=$_POST['useremail'];
        $password=$_POST['password'];
        $cpassword=$_POST['confirmpassword'];
        if($password==$cpassword){
          $sql= "INSERT INTO `tbl_user`(`username`, `email`, `password`) VALUES ('$name','$email','$password')";
          $result= mysqli_query($con,$sql);
          if(!$result){
              function console_log($msg) {
                  echo '<script>' .
                  'console.log("'.$msg .' ")</script>';
              }
              console_log("Insertion failed");


          }else{
              echo '<script>alert("Registration Sucessful")</script>';
              // <!-- header("location:registration.html"); -->
          }
        }else{
          echo '<script>alert("Password dosenot match")</script>';
        }



    }
?>
<!Doctype html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- <script>
            function checkpass(){
                var pass= document.getElementById('password').value;
                var cpass= document.getElementById('confirmpassword').value;
                if(pass!=cpass){
                  alert('Passwords doesnot');


                }
            }
        </script> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style=" background-color= #1900ff; ">
        <center>
            <div class="outer">
                <div>
                    <form action="" method="post" >
                        <label for="head">Sign up</label><br>
                        <input type="text" name="username" id="username" placeholder="Username" required><br>
                        <input type="email" name="useremail" id="useremail"placeholder="Email" required><br>
                        <input type="password" name="password" id="password" placeholder="Password" ><br>
                        <input type="password" name="confirmpassword" placeholder="Confirm password" id="confirmpassword" ><br>
                        <input type="submit" name="register" value="Register" id="submit" onsubmit="checkpass()" >
                    </form>
                    <form action="login.html">
                        <input type="submit" value="Login">
                    </form>
                </div>
            </div>
            
        </center>
    </body>
</html>
