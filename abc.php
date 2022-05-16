<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$get_batter= mysqli_query($conn, "SELECT * FROM `batterlink` ");
      while($batter = mysqli_fetch_array($get_batter)){
      $batsman=$batter['Battername'];
      $id=$batter['id'];
      $link=$batter['link'];
      echo $id;
      echo $batsman;
      echo $link;
       } ?>

</body>
</html>