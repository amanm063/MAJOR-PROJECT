<?php
include "config.php";

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: donnees.php");
}


if(isset($_POST['submit']))
{
    $email = $_POST['email'];
	$password = ($_POST['password']);
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: donnees.php");
	} else {
		echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Email or Password is Wrong.
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
    <title>Login</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


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
                    <h1><?php echo $_SESSION['username']; ?></h1>
                    <h1>Login</h1>
                    <input type="email" placeholder="Email" name="email" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <div class="d-grid gap-2">
                        <button type="submit" name="submit" class="btn btn-danger">Submit</button><br>
                    </div>
                    <p align="center">New Here? Create an account.</p>
                    <div align="center">
                        <a href="signup.php" style="text-decoration:none;"> <strong>Sign Up Here</strong></a>
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