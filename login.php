<?php

    include 'dbconn.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <!-- Simplebar -->
    <link type="text/css" href="assets/vendor/simplebar.min.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet">
    <link  rel="icon" type="image/x-icon" href="assets/images/icon.ico">

</head>

<body class="layout-login">





    <div class="layout-login__overlay"></div>
    <div class="layout-login__form" data-simplebar style="background: #222;">
        <div class="d-flex justify-content-center mt-2 mb-5 navbar-light">
            <a href="index.html" class="navbar-brand" style="min-width: 0">
                <img class="navbar-brand-icon" src="assets/images/logo.png" width="50" alt="Stack">
                <span>Reben Automobile Shop</span>
            </a>
        </div>

        <form action="login.php" method="post">
            <div class="form-group">
                <label class="text-label" for="username">Username:</label>
                <div class="input-group input-group-merge">
                    <input id="username" name="username" type="text" required="" class="form-control form-control-prepended" placeholder="Enter your username">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="far fa-user"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="text-label" for="password_2">Password:</label>
                <div class="input-group input-group-merge">
                    <input id="password" name="password" type="password" required="" class="form-control form-control-prepended" placeholder="Enter your password">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <span class="fa fa-key"></span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group text-center">
                <button class="btn btn-outline-warning" name="submit" type="submit" id="authenticate" style="width:200px">Login</button><br>
            </div>
        </form>       
        
        <?php
                               
                           
                                    if(isset($_POST['submit'])) {
                                        session_start();
                                        $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
                                        $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
    
                                        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                                        $result = $conn -> query($sql);
                                        if($result -> num_rows > 0){                                           
                                            $_SESSION['username'] = $username;   
                                            header("Location: dashboard.php");                                       
                                            //exit();
                                            //echo $_SESSION['username'];
                                        }
                                        else{
                                            $prompt =  "username or password is incorrect !!! Please try again";
                                        }
                                    }
                                    else{
                                        $prompt =  "";
                                    }
                                
                              
                               
                                
                    ?>

<p style="color:red; text-align: center"> <?php echo $prompt ?></p>


    </div>


    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Simplebar -->
    <script src="assets/vendor/simplebar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- App -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar-mini.js"></script>

    <!-- <script>
        $(document).ready(function (){
            $("#authenticate").click(function (e){
                e.preventDefault();

                const username = $('#username').val().trim()
                const password = $('#password').val().trim()

                if(username == "user" && password == "password"){
                    window.location = "dashboard.php";
                }
                else{
                    alert("Wrong user credentials")
                }
                
            })
        })
    </script> -->

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>





</body>

</html>
