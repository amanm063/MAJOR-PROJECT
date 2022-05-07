<?php

include "config.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: donnees.php");
}

if(isset($_POST['submit']))
{

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `login_info`.`users` (`first_name`, `last_name`, `username`, `email`, `dob`, `password`) VALUES ('$first_name', '$last_name', '$username', '$email', '$dob', '$password');";

    if($conn->query($sql)== true){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Registration Done Successfully. Click <a href="login.php">Here</a> to Login.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Email Already Exists.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="css/signup.css">

    <style>
        .alert{
            margin-bottom: 0;
            padding-bottom:3px;
            text-align: center;
        }
    </style>

</head>

<body>
    <div id="particles-js"></div> 
    <div class="count-particles"> <span class="js-count-particles">--</span> particles </div>
        <div class="random">
            <div class="signup">
                <form method="post">
                    <h1>Sign Up</h1>
                    <input type="text" placeholder="First Name" name="first_name" required>
                    <input type="text" placeholder="Last Name" name="last_name" required>
                    <input type="text" placeholder="Username" name="username" required>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="date" placeholder="Date Of Birth" name="dob" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-danger" name="submit">Submit</button><br>
                    </div>
                    <p align="center" >Already have an account?</p>
                    <div align="center">
                    <a href="login.php" style="text-decoration:none;"> <strong>Login Here<strong></a>
                    </div>
                    
                </form>
            </div>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script src="signup.js"></script>
</body>

</html>
