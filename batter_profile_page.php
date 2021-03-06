<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="i/Logo.png" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Oxygen:100,200,300,400,600,500,700,800,900|Source+Sans+Pro:100,200,300,400,500,600,700,800,900"
        rel="stylesheet">
        <link
		href="https://fonts.googleapis.com/css?family=Oxygen:100,200,300,400,600,500,700,800,900|Source+Sans+Pro:100,200,300,400,500,600,700,800,900"
		rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="css/style.css" rel="stylesheet" />
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <title>Batter Profile</title>
    <style>
        /* @import url(https://fonts.googleapis.com/css?family=Raleway:400,300,800); */
        @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);

        figure.snip0045 {
            font-family: 'Oxygen', Arial, sans-serif;
            position: relative;
            overflow: hidden;
            margin: 10px;
            min-width: 380px;
            max-width: 480px;
            width: 100%;
            background: #ffffff;
            color: #000000;
        }

        figure.snip0045 * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        figure.snip0045>img {
            width: 50%;
            border-radius: 50%;
            border: 4px solid #ffffff;
            -webkit-transition: all 0.35s ease-in-out;
            transition: all 0.35s ease-in-out;
            -webkit-transform: scale(1.6);
            transform: scale(1.6);
            position: relative;
            left: -15%;
            z-index: 1;
        }

        figure.snip0045 figcaption {
            padding: 20px 30px 20px 20px;
            position: absolute;
            right: 0;
            width: 50%;
        }

        figure.snip0045 figcaption h2,
        figure.snip0045 figcaption p {
            margin: 0;
            text-align: right;
            padding: 10px 0;
            width: 100%;
        }

        figure.snip0045 figcaption h2 {
            font-size: 1.3em;
            font-weight: 300;
            text-transform: uppercase;
            border-bottom: 1px solid rgba(0, 0, 0, 0.2);
        }

        figure.snip0045 figcaption h2 span {
            font-weight: 800;
        }

        figure.snip0045 figcaption p {
            font-size: 0.9em;
            opacity: 0.8;
        }

        figure.snip0045 figcaption h6 {
            margin: 0;
            text-align: left;
            padding: 8px 0;
            width: 100%;
            font-size: 0.9em;
            opacity: 0.8;
        }

        figure.snip0045 figcaption .icons {
            width: 100%;
            text-align: right;
        }

        figure.snip0045 figcaption .icons i {
            font-size: 26px;
            padding: 5px;
            top: 50%;
            color: #000000;
        }

        figure.snip0045 figcaption a {
            opacity: 0.3;
            -webkit-transition: opacity 0.35s;
            transition: opacity 0.35s;
        }

        figure.snip0045 figcaption a:hover {
            opacity: 0.8;
        }

        figure.snip0045 .position {
            width: 100%;
            text-align: right;
            padding: 15px 30px;
            font-size: 0.9em;
            opacity: 1;
            font-style: italic;
            color: #ffffff;
            background: #000000;
        }

        /* figure.snip0045.blue .position {
            background: #1f87a7;
        } */

        figure.snip0045.red {
            margin: 50px 0 50px 0;
        }

        figure.snip0045.red .position {
            background: #962d22;
        }

        /* figure.snip0045.yellow .position {
            background: #bf6516;
        }

        figure.snip0045.green .position {
            background: #1e8449;
        } */

        figure.snip0045:hover>img,
        figure.snip0045.hover>img {
            left: -12%;
        }

        html {
            height: 100%;
        }

        body {
            background-color: #212121;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-flow: wrap;
            margin: 0;
            height: 100%;
        }
    </style>
</head>

<body>
<?php include("navbar.php"); ?>

<?php
extract($_REQUEST);
if(isset($_REQUEST['action']) && $action == 'batsman'){
$get_batter= mysqli_query($conn, "SELECT * FROM `batterlink` WHERE id='$batterid' ");
      while($batter = mysqli_fetch_array($get_batter)){
      $batsman=$batter['Battername'];
      $id=$batter['id'];
      $link=$batter['link'];
    //   echo $id;
    //   echo $batsman;
    //   echo $link;
      $details= mysqli_query($conn, "SELECT * FROM `batsmen` WHERE id='$id' "); 
      while($get_batter_details = mysqli_fetch_array($details)){
      $strike=$get_batter_details['strike rate'];
      $six=$get_batter_details['total sixes'];
      $four=$get_batter_details['total fours'];
      $Runs=$get_batter_details['Runs'];
      $batsmanname=$get_batter_details['Batsman Name'];

      echo $Runs;
      
       ?>
    <figure class="snip0045 red">
        <figcaption>
            <h2><span><?php echo $batsmanname;  ?></span></h2>
            <!-- <p>Royal Challenger Bangalore</p> -->
            <!-- <div class="icons">
                <a href="#"><i class="ion-ios-home"></i></a>
                <a href="#"><i class="ion-ios-email"></i></a>
                <a href="#"><i class="ion-ios-telephone"></i></a>
            </div> -->
            <h6>Strike Rate:<?php echo $strike; ?></h6>
            <h6>Six:<?php echo $six; ?></h6>
            <h6>Four:<?php echo $four; ?></h6>
            <h6>Runs:<?php echo $Runs; ?></h6>
        </figcaption>
        <img style="width: 230px; height: 230px;" src="images/<?php echo $id; ?>.jpg" alt="sample7" />
        <div class="position">Batter</div>
    </figure>
<?php echo $link; 
      }
      }
    }?>

<!-- 
    <div class='tableauPlaceholder' id='viz1652163804801' style='position: relative'><noscript><a href='#'>
                <img alt=' '
                    src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;MQ&#47;MQSSQ54YK&#47;1_rss.png'
                    style='border: none' /></a></noscript>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='path' value='shared&#47;MQSSQ54YK' />
            <param name='toolbar' value='yes' />
            <param name='static_image'
                value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;MQ&#47;MQSSQ54YK&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
            <param name='filter' value='publish=yes' />
        </object>
    </div>

    <script type='text/javascript'>
        var divElement = document.getElementById('viz1652163804801'); var vizElement = divElement.getElementsByTagName('object')[0]; if (divElement.offsetWidth > 800) { vizElement.style.minWidth = '420px'; vizElement.style.maxWidth = '100%'; vizElement.style.minHeight = '610px'; vizElement.style.maxHeight = (divElement.offsetWidth * 0.75) + 'px'; } else if (divElement.offsetWidth > 500) { vizElement.style.minWidth = '420px'; vizElement.style.maxWidth = '100%'; vizElement.style.minHeight = '610px'; vizElement.style.maxHeight = (divElement.offsetWidth * 0.75) + 'px'; } else { vizElement.style.width = '100%'; vizElement.style.minHeight = '1400px'; vizElement.style.maxHeight = (divElement.offsetWidth * 1.77) + 'px'; } var scriptElement = document.createElement('script'); scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js'; vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script> -->


</body>

</html>