<?php
session_start();
?>
<!DOCTYPE html>
<html>
<style>
    HTML,
    BODY {
        height: 100%;
    }
</style>

<head>
    <title>Sign Up</title>
    <script type="text/javascript" src="passverify.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../style/stylesheet.css">
</head>

<body class="bg-homepage">
    <!--JavaScript: jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!--Navigation bar (Menu)-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">
                <img src="../img/navbar_logo.png" class="d-inline-block align-center" alt="Logo">
                Only Friends
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="../register/signup.php">Sign up <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../login/login.php">Log in <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../aboutus/aboutus.html">About us <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <br><br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                
                <?php
                // check for any input errors
                $db = mysqli_connect("localhost", "dbusername", "dbpassword", "dbname");
                if ($db->connect_error) {
                    echo ("Failed to connect to MySQL: " . $db->connect_error);
                    exit();
                }
                $commandText = "SELECT Message FROM Error";
                $result = $db->query($commandText);
                if (!is_null($row = mysqli_fetch_row($result))) {
                    printf("<div class='error'>%s</div>", $row[0]);
                    $db->query("DELETE FROM Error");
                }
                ?>

                <div class="jumbotron" style="text-align:center;">

                    <h2 class="signup-h2">Sign up</h2>

                    <form name="form" method="post" action="register.php" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label class="signup-label">Username</label><br>
                            <input type="text" name="username" minlength="4" maxlength="16" required>
                        </div>
                        <div class="form-group">
                            <label class="signup-label">Email</label><br>
                            <input type="email" name="email">
                        </div>
                        <div class="form-group">
                            <label id="pw" class="signup-label">Password</label><br>
                            <input type="password" name="password" minlength="4" maxlength="16" required>
                        </div>
                        <div class="form-group">
                            <label class="signup-label">Confirm password</label><br>
                            <input type="password" name="password2" required>
                        </div>
                        <br>
                        <button type="submit" style="background-color:#F1C21B; !important" class="btn" name="reg_user">Register</button>
                        <br><br>
                        <p style="text-align:center">Already a member? <a href="../login/login.php">Sign in</a></p>
                    </form>

                </div>

            </div>
        </div>

    </div>



</body>

</html>