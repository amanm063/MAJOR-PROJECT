<?php include("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="i/card.jpg" type="image/x-icon">
    <title>Batter Cards</title>
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

    <style>
        *::-webkit-scrollbar {
            width: 10px;
        }

        *::-webkit-scrollbar-track {
            background: #161616;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #c22a16;
            border-radius: 10px;
            border: 2px solid #ffffff;
        }

        @import url('https://fonts.googleapis.com/css?family=Montserrat');

        * {
            box-sizing: border-box;
        }

        body {
            background-color: #161616;
            color: whitesmoke;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            flex-direction: row;
            min-height: 100vh;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        a:hover {
            font-size: large;
        }

        h3 {
            margin: 10px 0;
        }

        h6 {
            margin: 5px 0 16px;
            font-size: 14px;
            text-transform: uppercase;
            text-align: center;
        }

        p {
            font-size: 14px;
            line-height: 21px;
        }

        .card-container {
            background-color: #c22a16;
            border-radius: 5px;
            box-shadow: 0px 10px 20px -10px rgba(0, 0, 0, 0.75);
            color: #B3B8CD;
            padding-top: 30px;
            /* display: block; */
            position: relative;
            width: 350px;
            max-width: 100%;
            text-align: center;
            margin: 3% 6%;
        }


        .card-container .round {
            border: 1px solid #f0d800;
            border-radius: 50%;
            padding: 7px;
        }

        button.primary {
            background-color: #f0d800;
            border: 1px solid #f0d800;
            border-radius: 3px;
            color: #4a3d83;
            font-family: 'Montserrat', sans-serif;
            font-weight: 500;
            padding: 10px 25px;
            width: 100%;
        }


        .skills {
            background-color: #551212;
            text-align: left;
            padding: 15px;
            margin-top: 30px;
        }

        .skills ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .skills ul li {
            border: 1px solid #2D2747;
            border-radius: 2px;
            display: inline-block;
            font-size: 12px;
            margin: 0 7px 7px 0;
            padding: 7px;
        }

        @media screen and (max-width: 600px) {
            .card-container {
                width: 100%;
                display: block;
                margin-bottom: 16px;
            }
        }

        .info {
            text-align: center;
            margin: auto;
            width: 100%;
        }
    </style>
</head>

<body>
<?php include("navbar.php"); ?>
    <div class="info">
        <h1>Batters According To Their Ratings</h1>
        <p>
            Some other information.
        </p>
    </div>
    <?php 
      
      $i=1;
      $get_batter= mysqli_query($conn, "SELECT * FROM `batsmen` ");
      while($batter = mysqli_fetch_array($get_batter)){
      $batsman=$batter['Batsman Name'];
      $id=$batter['id'];
      $totalrating=$batter['total rating'];
      
      ?>
    <div class="card-container">
        <img style="width: 250px; height: 250px;" class="round" src="images/<?php echo $id; ?>.jpg" alt="user" />
        <h3><?php echo $batsman; ?></h3>
        <div class="skills">
            <h6>Player Rating: <?php echo $totalrating; ?></h6>
            <div class="buttons">
                <button class="primary"><a href="batter_profile_page.php?action=batsman&batterid=<?php echo $id; ?>">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div>
    <?php } ?>
<!-- 
    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Virat Kohli</h3>
        <h6>RCB</h6>
        <div class="skills">
            <h6>Player Rating:</h6>
            <div class="buttons">
                <button class="primary"><a href="#">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div>

    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Virat Kohli</h3>
        <h6>RCB</h6>
        <div class="skills">
            <h6>Player Rating:</h6>
            <div class="buttons">
                <button class="primary"><a href="#">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div>

    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Virat Kohli</h3>
        <h6>RCB</h6>
        <div class="skills">
            <h6>Player Rating:</h6>
            <div class="buttons">
                <button class="primary"><a href="#">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div>

    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Virat Kohli</h3>
        <h6>RCB</h6>
        <div class="skills">
            <h6>Player Rating:</h6>
            <div class="buttons">
                <button class="primary"><a href="#">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div>

    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Virat Kohli</h3>
        <h6>RCB</h6>
        <div class="skills">
            <h6>Player Rating:</h6>
            <div class="buttons">
                <button class="primary"><a href="#">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div>

    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Virat Kohli</h3>
        <h6>RCB</h6>
        <div class="skills">
            <h6>Player Rating:</h6>
            <div class="buttons">
                <button class="primary"><a href="#">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div>

    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Virat Kohli</h3>
        <h6>RCB</h6>
        <div class="skills">
            <h6>Player Rating:</h6>
            <div class="buttons">
                <button class="primary"><a href="#">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div>

    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Virat Kohli</h3>
        <h6>RCB</h6>
        <div class="skills">
            <h6>Player Rating:</h6>
            <div class="buttons">
                <button class="primary"><a href="#">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div>

    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Virat Kohli</h3>
        <h6>RCB</h6>
        <div class="skills">
            <h6>Player Rating:</h6>
            <div class="buttons">
                <button class="primary"><a href="#">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div>

    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Virat Kohli</h3>
        <h6>RCB</h6>
        <div class="skills">
            <h6>Player Rating:</h6>
            <div class="buttons">
                <button class="primary"><a href="#">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div>

    <div class="card-container">
        <img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
        <h3>Virat Kohli</h3>
        <h6>RCB</h6>
        <div class="skills">
            <h6>Player Rating:</h6>
            <div class="buttons">
                <button class="primary"><a href="#">
                        View More Stats</a>
                </button>
            </div>
        </div>
    </div> -->


</body>

</html>