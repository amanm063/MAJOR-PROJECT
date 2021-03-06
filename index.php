<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>D XI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="i/Logo.png" type="image/x-icon">
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
			width: 8px;
		}

		*::-webkit-scrollbar-track {
			background: #161616;
		}

		*::-webkit-scrollbar-thumb {
			background-color: #000;
			border-radius: 10px;
			border: 1px solid #ffffff;
		}

		#background-video {
			width: 100vw;
			height: 100vh;
			object-fit: cover;
			position: fixed;
			left: 0;
			right: 0;
			top: 0;
			bottom: 0;
			z-index: -1;
		}

		@media (max-width: 750px) {
			#background-video {
				display: none;
			}

			body {
				background: url(".jpg") no-repeat;
				background-size: cover;
			}
		}

		#vid21 {
			height: 1000px;
		}

		main {
			background-color: lightblue;
			font-size: 2rem;
			margin-top: 50vh;
			padding: 10px;
			position: relative;
		}
	</style>

</head>

<body>
	<!-- Navigation -->
<?php include("navbar.php"); ?>
	<section id="vid21">
		<video id="background-video" autoplay loop muted poster=".jpg">
			<source src="VE Project 2.mp4" type="video/mp4" />
		</video>
	</section>



	<!-- Content -->
	<section class="pt-100 pb-70 bg-dark content_28">
		<div class="container px-xl-0 text-center">
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<div class="f-14 text-uppercase semibold color-white sp-20">TOOLS WE USED</div>
					<h2 class="mt-15 mb-45 small color-white">FOR STATISTICS</h2>
				</div>
			</div>
			<div class="row align-items-center justify-content-center no-gutters">
				<div class="col-md-2 col-sm-4 col-6 mb-30">
					<img src="i/1024px-Python-logo-notext.svg.png" srcset="i/1024px-Python-logo-notext.svg.png 16x"
						alt="" />
				</div>
				<div class="col-md-2 col-sm-4 col-6 mb-30">
					<img src="i/Tableau_logo.svg.png" srcset="i/Tableau_logo.svg.png 16x" alt="Tableau_logo" />
				</div>
				<div class="col-md-2 col-sm-4 col-6 mb-30">
					<img src="i/MySQL_logo.svg.png" srcset="i/MySQL_logo.svg.png 16x" alt="MySQL_logo" />
				</div>
				<div class="col-md-2 col-sm-4 col-6 mb-30">
					<img src="i/Microsoft_Office_Excel_(2019???present).svg.png"
						srcset="i/Microsoft_Office_Excel_(2019???present).svg.png 16x" alt="Excel_Logo" />
				</div>
				<div class="col-md-2 col-sm-4 col-6 mb-30">
					<img src="i/Power_BI_logo.svg.png" srcset="i/Power_BI_logo.svg.png 16x" alt="Power_BI_logo" />
				</div>
			</div>
		</div>
	</section>

	<!-- Feature -->
	<section class="pt-105 pb-95 bg-purple color-dark feature_40">
		<div class="container px-xl-0">
			<div class="row justify-content-center">
				<div class="col-xl-10">
					<div class="row justify-content-between">
						<div class="col-xl-7 col-md-6 mb-50 mb-md-0">
							<h2 class="mb-20 small">Built to Provide Illustrations Worth Thousand Words.</h2>
							<div class="f-22 text-adaptive">365 Stats, Useful graphs and ratings to provider digital
								litrecy, and knowledge for everyone IPL enthusiast.
							</div>
							<span>
								<a href="#" class="btn mt-35 action-1">NEWS</a>
							</span>
						</div>
						<div class="col-md-5 col-sm-10 mt-15">
							<div class="mb-35 block">
								<div class="mb-15 d-flex align-items-center f-22 title">
									<i class="fas fa-cloud f-24 lh-32 w-30 mr-15"></i>
									<div>BATTING</div>
								</div>
								<div class="ml-45 text-adaptive">Stats for the run scorers.
								</div>
								<span>
									<a href="#" class="btn mt-35 action-1">BAT</a>
								</span>
							</div>
							<div class="mb-35 block">
								<div class="mb-15 d-flex align-items-center f-22 title">
									<i class="fas fa-book f-24 lh-32 w-30 mr-15"></i>
									<div>BOWLING</div>
								</div>
								<div class="ml-45 text-adaptive">More about the run defenders.
								</div>
								<span>
									<a href="#" class="btn mt-35 action-1">BOWL</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Feature 2-->
	<section class="bg-dark feature_20">
		<div class="container px-xl-0">
			<div class="row justify-content-between align-items-stretch">
				<div class="col-xl-6 col-lg-7 col-md-9 pt-120 pb-80 left_side">
					<h2 class="mb-30 small color-white">Which team is better?</h2>
					<div class="f-22 color-white text-adaptive">Now, answer this question with in-depth analysis of
						each team.
					</div>
					<span>
						<a href="#" class="btn mt-45 mb-65 action-1">Discover</a>
					</span>
					<div class="row justify-content-between">
						<div class="col-sm-6 mb-40 block">

							<div class="mt-25 mb-20 f-22 title color-white">Why?</div>
							<div class="color-white text-adaptive">To know which team is stronger against which team
								and vice-versa.
							</div>
						</div>
						<div class="col-sm-5 mb-40 block">

							<div class="mt-25 mb-20 f-22 title color-white">How?</div>
							<div class="color-white text-adaptive">Streamline the individual ratings and calculating
								the average of all teams against all teams.
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-3 col-md-2 d-none d-md-block">
					<img src="i/5031659.jpg" srcset="i/5031659.jpg 4x" alt="" class="h-full absolute bg" />
				</div>
			</div>
		</div>
	</section>

	<!-- Feature 3 -->
	<section class="bg-purple feature_43">
		<div class="container px-xl-0 text-center text-sm-left">
			<div class="row">
				<div class="col-xl-5 col-lg-4 col-md-3 col-sm-1 d-none d-sm-block">
					<img src="i/unnamed.png" srcset="i/unnamed.png 2x" alt="" class="absolute h-full bg" />
				</div>
				<div class="col-sm-1">
				</div>
				<div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 pt-105 pb-100 inner">
					<h2 class="mb-25 small color-dark">Visualize. Analyze. Predict.</h2>
					<div class="f-22 color-dark text-adaptive">Dedicated to transforming the way IPL is viewed by
						educating people more about how to see value in a player.
					</div>
					<span>
						<a href="#" class="btn mt-30 action-1">TEAMS</a>
					</span>
				</div>
			</div>
		</div>
	</section>

	<!-- Showcase -->
	<section class="pt-105 pb-100 bg-dark color-white text-center showcase_4">
		<div class="container px-xl-0">
			<h2 class="small">More than 500 players and 10 Frachises</h2>
			<div class="mt-15 mb-50 f-22 text-adaptive">With the most complete source of data and with latest updates.
			</div>
			<div class="row align-items-stretch">
				<div class="col-md-4 d-flex flex-column justify-content-between">
					<a href="#" class="mt-30 w-full d-block link">
						<img src="i/1.jpg" srcset="i/1.jpg 2x" alt="" class="img-fluid radius6" />
					</a>
					<a href="#" class="mt-30 w-full d-block link">
						<img src="i/2.jpg" srcset="i/2.jpg 1x" alt="" class="img-fluid radius6" />
					</a>
					<a href="#" class="mt-30 w-full d-block link">
						<img src="i/3.jpg" srcset="i/3.jpg 2x" alt="" class="img-fluid radius6" />
					</a>
				</div>
				<div class="col-md-4 d-flex flex-column justify-content-between">
					<a href="#" class="mt-30 w-full d-block link">
						<img src="i/4.jpg" srcset="i/4.jpg 2x" alt="" class="img-fluid radius6" />
					</a>
					<a href="#" class="mt-30 w-full d-block link">
						<img src="i/5.jpg" srcset="i/5.jpg 2x" alt="" class="img-fluid radius6" />
					</a>
					<a href="#" class="mt-30 w-full d-block link">
						<img src="i/6.jpg" srcset="i/6.jpg 2x" alt="" class="img-fluid radius6" />
					</a>
					<a href="#" class="mt-30 w-full d-block link">
						<img src="i/7.jpg" srcset="i/7.jpg 2x" alt="" class="img-fluid radius6" />
					</a>
				</div>
				<div class="col-md-4 d-flex flex-column justify-content-between">
					<a href="#" class="mt-30 w-full d-block link">
						<img src="i/8.jpg" srcset="i/8.jpg 2x" alt="" class="img-fluid radius6" />
					</a>
					<a href="#" class="mt-30 w-full d-block link">
						<img src="i/9.jpg" srcset="i/9.jpg 2x" alt="" class="img-fluid radius6" />
					</a>
					<a href="#" class="mt-30 w-full d-block link">
						<img src="i/10.jpg" srcset="i/10.jpg 2x" alt="" class="img-fluid radius6" />
					</a>
					<a href="#" class="mt-30 w-full d-block link">
						<img src="i/11.jpg" srcset="i/11.jpg 2x" alt="" class="img-fluid radius6" />
					</a>
				</div>
			</div>
			<div>
				<a href="#" class="btn mt-80 lg border-transparent-white">View all BATTERS</a>
			</div>
			<div>
				<a href="#" class="btn mt-80 lg border-transparent-white">View all BOWLERS</a>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer class="pt-70 pb-60 bg-dark footer_4">
		<div class="container px-xl-0">
			<div class="row align-items-center">
				<div class="col-xl-2 order-0">
					<a href="#" class="link logo color-white">D XI</a>
				</div>
				<div class="col-xl-4 col-lg-9 order-2 order-xl-0 color-white">?? NO RIGTHS</div>
				<div class="mt-10 mb-10 my-xl-0 col-xl-6 text-xl-right links order-1 order-xl-0">
					<a href="batter_card.php" class="link color-white mr-30">BATTERS</a>
					<a href="bowler_card.php" class="link color-white mr-30">BOWLERS</a>
					<a href="teams.html" class="link color-white mr-30">TEAMS</a>
					<a href="all_players.html" class="link color-white mr-30">PLAYERS</a>
					<a href="about_us.html" class="link color-white">ABOUT US</a>
					<a href="help.html" class="link color-white">HELP</a>
				</div>
			</div>
			<div class="mt-30 mb-40 hr h-2 bg-gray op-5">
				<div>
				</div>
			</div>
			<div class="row align-items-baseline">
				<div class="col-xl-10 col-md-9">
					<div class="color-white text-adaptive">The world&apos;s largest cricket league Analyzers.
					</div>
				</div>
				<div class="mt-10 mt-md-0 col-xl-2 col-md-3 text-md-right socials">
					<a href="https://www.linkedin.com/in/ritikmalik007/" target="_blank"
						class="f-18 link color-twitter mr-15">
						<i class="fab fa-linkedin"></i>
					</a>
					<a href="https://www.linkedin.com/in/amanmalik063/" target="_blank"
						class="f-18 link color-twitter mx-15">
						<i class="fab fa-linkedin"></i>
					</a>
					<a href="https://www.linkedin.com/in/kartiklakra/" target="_blank"
						class="f-18 link color-twitter ml-15">
						<i class="fab fa-linkedin"></i>
					</a>
				</div>
			</div>
		</div>
	</footer>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script type="text/javascript"
		src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyDP6Ex5S03nvKZJZSvGXsEAi3X_tFkua4U"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/script.js"></script>
</body>

</html>