<?php
require('db.php');
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<title>Covid-19</title>
	</head>
	<body>
		<div class="header_menu">
			<nav class="navbar navbar-expand-lg navbar-light bg-warning">
				<div class="container">
					<a class="navbar-brand" href="index.html">Covid-19</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav  ml-auto">
							<li class="nav-item ">
								<a class="nav-link" href="homepage.php">Home<span class="sr-only"></span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="syndromes.html">Covid-test</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="database.php">Patient Records</a>
                            </li>
                            <li class="nav-item">
								<a class="nav-link" href="logout.php">Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="cover_content">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10">
					<div class="cover_text">
						<p class="text1">Coronavirus disease 2019 (COVID 19) is an infectious disease caused by severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). It was first identified in December 2019 in Wuhan, Hubei, China, and has resulted in an ongoing pandemic. As of August 2020, more than 22.9 million cases have been reported across 188 countries and territories, resulting in more than 799,000 deaths. However more than 14.7 million people have recovered.</p>
						<img src="images/covid-19.jpg" alt="covid-19">
						<p class="test2">This is a Web App that does an online test regarding COVID 19 symptoms and gives a score based on the given response by the user . And based  on that resulted score the system decides your covid result.</p>
					</div>
					<div class="buttn">
						<div class="cmn_btn"><a href="https://www.worldometers.info/coronavirus/country/india/">India Covid 19 status</a></div>
					</div>
					<div class="buttn">
						<div class="cmn_btn"><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/">To know more about covid and its symptoms</a></div>
					</div>
					<div class="buttn">
						<div class="cmn_btn"><a href="https://excise.wb.gov.in/CHMS/Portal_Default.aspx">West Bengal Integrated Covid Management System</a></div>
					</div>
					<div class="buttn">
						<div class="cmn_btn"><a href="syndromes.html">Continue for a online covid 19 checkup</a></div>
					</div>


					<div class="buttn">
						<div class="cmn_btn"><a href="guideline.html">GUIDELINE</a></div>
					</div>

				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</body>
</html>