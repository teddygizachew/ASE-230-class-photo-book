<?php

include 'data.php';
include 'functions.php';

$name = $advisors[$_GET['id']]['name'];
$header = "This is ASE 230 - $name";
$dream_profession = $advisors[$_GET['id']]['dream_profession'];
$dream_company = $advisors[$_GET['id']]['dream_company'];
$email = $advisors[$_GET['id']]['email'];
$quote = $advisors[$_GET['id']]['quote'];
$about_me = $advisors[$_GET['id']]['about_me'];
$mobile_development = $advisors[$_GET['id']]['mobile_development'];
$mobile_dev_percent = $advisors[$_GET['id']]['mobile_dev_percent'];
$ux_design = $advisors[$_GET['id']]['ux_design'];
$ux_des_perecent = $advisors[$_GET['id']]['ux_des_perecent'];
$volleyball = $advisors[$_GET['id']]['volleyball'];
$voll_percent = $advisors[$_GET['id']]['voll_percent'];
$fun_fact = $advisors[$_GET['id']]['fun_fact'];

$age =calculate_time_alive('18-7-2001');
$time_alive = calculate_age('18-7-2001');
?>

<html lang="en">
<!-- https://www.bootdey.com/snippets/view/team-user-resume#html -->

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

</head>

<body>
	<link rel="stylesheet" href="assets/css/detail.css" />
	<?php
	echo "<title>ASE 230 - $name</title>";
	?>

	<div class="roww">
		<div>
			<a class="homeLink" href="index.php">
				<img src="assets/home.svg" alt="">
			</a>
		</div>
		<div class="container text-center mb-5">
			<h1>
				<?php
				echo $header;
				?>
			</h1>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-6">
				<div class="mb-2">
					<img class="w-100" src="assets/img2.jpg" alt="" />
				</div>
				<div class="mb-2 d-flex">
					<h4 class="font-weight-normal">
						<?php
						echo $name;
						?>
					</h4>
					<div class="social d-flex ml-auto">
						<p class="pr-2 font-weight-normal">Follow on:</p>
						<a href="#" class="text-muted mr-1">
							<i class="fab fa-facebook-f"></i>
						</a>
						<a href="@teddy_giza" class="text-muted mr-1">
							<i class="fab fa-twitter"></i>
						</a>
						<a href="@theo_amare" class="text-muted mr-1">
							<i class="fab fa-instagram"></i>
						</a>
						<a href="https://www.linkedin.com/in/teddyamare/" class="text-muted">
							<i class="fab fa-linkedin"></i>
						</a>
					</div>
				</div>
				<div class="mb-2">
					<ul class="list-unstyled">
						<li class="media">
							<span class="w-25 text-black font-weight-normal">Dream profession:</span>
							<label class="media-body">
								<?php
								echo $dream_profession;
								?>
							</label>
						</li>
						<li class="media">
							<span class="w-25 text-black font-weight-normal">Dream company:
							</span>
							<label class="media-body">
								<?php
								echo $dream_company;
								?>
							</label>
						</li>
						<li class="media">
							<span class="w-25 text-black font-weight-normal">Email: </span>
							<label class="media-body">
								<?php
								echo $email;
								?>
							</label>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-7 col-md-6 pl-xl-3">
				<h5 class="font-weight-normal">Short intro</h5>
				<p>
					<?php
					echo $about_me;
					?>
				</p>
				<div class="my-2 bg-light p-2">
					<p class="font-italic mb-0">
						<?php
						echo $quote;
						?>
					</p>
				</div>
				<div class="mb-2 mt-2 pt-1">
					<h5 class="font-weight-normal">Top skills</h5>
				</div>
				<div class="py-1">
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
							<div class="progress-bar-title">
								<?php
								echo $mobile_development;
								?>
							</div>
							<span class="progress-bar-number">
								<?php
								echo $mobile_dev_percent;
								?>
							</span>
						</div>
					</div>
				</div>
				<div class="py-1">
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
							<div class="progress-bar-title">
								<?php
								echo $ux_design;
								?>
							</div>
							<span class="progress-bar-number">
								<?php
								echo $ux_des_perecent;
								?>
							</span>
						</div>
					</div>
				</div>
				<div class="py-1">
					<div class="progress">
						<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
							<div class="progress-bar-title">
								<?php
								echo $volleyball;
								?>
							</div>
							<span class="progress-bar-number">
								<?php
								echo $voll_percent;
								?>
							</span>
						</div>
					</div>
				</div>
				<h5 class="font-weight-normal">Fun fact</h5>
				<p>
					<?php
					echo $fun_fact;
					?>
				</p>
				<?php
				echo "$age"."<br/>";
				echo "$time_alive";
				?>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>