<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap4</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap" rel="stylesheet">

</head>

<body>
<!--main header-->
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
			<a class="navbar-brand" href="#">Chicago</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto ">
					<li class="nav-item active px-4">
						<a class="nav-link hvr-underline-from-center" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item px-4">
						<a class="nav-link hvr-underline-from-center" href="#about">About</a>
					</li>

					<li class="nav-item px-4">
						<a class="nav-link hvr-underline-from-center" href="#contact">Contact</a>
					</li>
					<li class="nav-item px-4">
						<a class="nav-link hvr-underline-from-center" href="#services">Services</a>
					</li>
				</ul>

			</div>
		</nav>


		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active ">
					<img class="d-block w-100" src="images/bg2.jpg" alt="First slide">
					<div class="carousel-caption" id="item1">
						<h3>Chicago</h3>
						<p>Thank you, Chicago!</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/bg1.jpg" alt="Second slide">
					<div class="carousel-caption " id="item1">
						<h3>Chicago</h3>
						<p>Thank you, Chicago!</p>
					</div>
				</div>

			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</header>
<!--aboutus-->
	<section id="about">
		<div class="container">
			<h1 class="text-center pt-5">
				About Us
			</h1>
			<hr class="w-25 mx-auto pb-5">


			<div class="row mb-5">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="images/img1.jpg" class="img-fluid ">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h2>Who I Am ?</h2>
					<hr class="">
					<p class="pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<button class="btn  btn-danger">Wanna Know Me</button>
				</div>

			</div>
		</div>
	</section>

	<!--	service part				-->
	<section id="services">
		<div class="container">
			<h1 class="text-center pt-5">
				Services
			</h1>
			<hr class="w-25 mx-auto pb-5">


			<div class="row mb-5">
				<div class="col-lg-4">
					<div class="card">
						<img class="card-img-top" src="images/img2.jpg" alt="Card image">
						<div class="card-body text-center">
							<h4 class="card-title">John Doe</h4>
							<p class="card-text">Some example text.</p>
							<a href="#" class="btn btn-danger">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						<img class="card-img-top" src="images/img2.jpg" alt="Card image">
						<div class="card-body text-center">
							<h4 class="card-title">John Doe</h4>
							<p class="card-text">Some example text.</p>
							<a href="#" class="btn btn-danger">See Profile</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card">
						<img class="card-img-top" src="images/img2.jpg" alt="Card image">
						<div class="card-body text-center">
							<h4 class="card-title">John Doe</h4>
							<p class="card-text">Some example text.</p>
							<a href="#" class="btn btn-danger">See Profile</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<!--contact-->
	<section class="bg-danger">
		<article class="text-center py-4 text-white">
			<h1 class="display-4">+91 7852136954</h1>
			<p>
				Contact Us for more detail
			</p>
		
	         <div class="batman">
	         	<img src="images/run.gif">
	         </div>		
			<button class="btn btn-warning p-2 text-white" style="font-size:20px;">Contact us</button>
		</article>
	</section>

	<!--Gallery-->
	<section>
		<div class="container">
			<h1 class="text-center pt-5">
				Gallery
			</h1>
			<hr class="w-25 mx-auto pb-5">

			<div class="row">
				<div class="col-lg-4 col-md-2 col-12 mb-5">
					<img src="images/img3.jpg" class="img-fluid">
				</div>
				<div class="col-lg-4 col-md-2 col-12 mb-5">
					<img src="images/img3.jpg" class="img-fluid">
				</div>
				<div class="col-lg-4 col-md-2 col-12 mb-5">
					<img src="images/img3.jpg" class="img-fluid">
				</div>
				<div class="col-lg-4 col-md-2 col-12 mb-5">
					<img src="images/img3.jpg" class="img-fluid">
				</div>
				<div class="col-lg-4 col-md-2 col-12 mb-5">
					<img src="images/img3.jpg" class="img-fluid">
				</div>
				<div class="col-lg-4 col-md-2 col-12 mb-5">
					<img src="images/img3.jpg" class="img-fluid">
				</div>

			</div>



		</div>
	</section>

<!--    join us-->
	<section class="bg-danger">
		<article class=" py-4 ">
			<div class="text-center text-white">
				<h1 class="display-4">Want to Join Us</h1>
				<p>
					Be a part of our team.
				</p>
				<button class="btn btn-warning p-2 text-white" style="font-size:20px;" data-toggle="modal" data-target="#myModal">Join Now</button>
			</div>
			<div class="modal fade" id="myModal">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">

						<!-- Modal Header -->
						<div class="modal-header">
							<h4 class="modal-title">Sign Up</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

						<!-- Modal body -->
						<div class="modal-body">
							<form action="/action_page.php">
								<div class="form-group">
									<label for="email">Email address:</label>
									<input type="email" class="form-control" id="email">
								</div>
								<div class="form-group">
									<label for="pwd">Password:</label>
									<input type="password" class="form-control" id="pwd">
								</div>
								<div class="form-group form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox"> Remember me
									</label>
								</div>
								<button type="submit" class="btn btn-danger">Submit</button>
							</form>
						</div>

						<!-- Modal footer -->
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>

					</div>
				</div>
			</div>


		</article>
	</section>
            
<!--        contact form   -->
	<section id="contact">
		<div class="container">
			<h1 class="text-center pt-5">
				Contact Us
			</h1>
			<hr class="w-25 mx-auto pb-5">
			<div class="w-50 mx-auto mb-5">
				<form action="/action_page.php" autocomplete="off">
					<div class="form-group">
						<label for="email">Name:</label>
						<input type="email" class="form-control" id="email">
					</div>
					<div class="form-group">
						<label for="pwd">Email:</label>
						<input type="password" class="form-control" id="pwd">
					</div>
					<div class="form-group">
						<label for="pwd">Mobile No:</label>
						<input type="password" class="form-control" id="pwd">
					</div>
					<div class="form-group form-check">
						<label class="form-check-label">
							<input class="form-check-input" type="checkbox"> Remember me
						</label>
					</div>
					<button type="submit" class="btn btn-danger">Submit</button>
				</form>
			</div>
		</div>
	</section>

<!--       footer-->
	<footer class="bg-dark text-white text-center">
		<p class="mb-0 p-2">© 2019 Photography. All Rights Reserved </p>
	</footer>






	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>

</html>
