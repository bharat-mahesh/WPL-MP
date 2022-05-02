<!DOCTYPE HTML>

<html>
	<head>
		<title>Silver Valley Institute</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">
					<div class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.html">Silver Valley Institute</a></h1>
							<p>Preparing the future</p>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a class="icon solid fa-home" href="index.html"><span>Home</span></a></li>
									<li>
										<a href="#" class="icon fa-chart-bar"><span>About us</span></a>
										<ul>
											<li><a href="#">History</a></li>
											<li><a href="#">Academics</a></li>
											<li><a href="#">Alumni</a></li>
											<li>
												<a href="#">Our Staff</a>
												<ul>
													<li><a href="#">Pre-Primary</a></li>
													<li><a href="#">Primary</a></li>
													<li><a href="#">Secondary</a></li>
												</ul>
											</li>
											<li><a href="#">Gallery</a></li>
										</ul>
									</li>
									<li><a class="icon solid fa-cog" href="enrollment.html"><span>Enrollment</span></a></li>
									<li><a class="icon solid fa-retweet" href="right-sidebar.html"><span>Student Life</span></a></li>
									<li><a class="icon solid fa-sitemap" href="#footer"><span>Contact us</span></a></li>
								</ul>
							</nav>

					</div>
				</section>

			<!-- Features -->
				<section id="features">
					<div class="container">
						<header>
							<h2>Gentlemen, behold! This is <strong>Strongly Typed</strong>!</h2>
						</header>
						<div class="row aln-center">
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/kindergarten.jpg" alt="" /></a>
										<header>
											<h3>Early Learning</h3>
										</header>
										<p>Somthing about pre Primary</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/Primary.jpg" alt="" /></a>
										<header>
											<h3>Primary</h3>
										</header>
										<p>Something about Primary</p>
									</section>

							</div>
							<div class="col-4 col-6-medium col-12-small">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/Secondary.jpg" alt="" /></a>
										<header>
											<h3>Secondary</h3>
										</header>
										<p>Something about Secondary</p>
									</section>

							</div>
							<div class="col-12">
								<ul class="actions">
									<li><a href="#" class="button icon solid fa-file">Learn more about us</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>

			<!-- Banner -->
				<section id="banner">
					<div class="container">
						<p>“Live as if you were to die tomorrow. Learn as if you were to live forever” – Mahatma Gandhi</p>
					</div>
				</section>

			<!-- Main -->
				<section id="main">
					<div class="container">
						<div class="row">

							<!-- Content -->
								<div id="content" class="col-8 col-12-medium">

									<!-- Post -->
										<article class="box post">
											<header>
												<h2><a href="#">Our Vision</a></h2>
											</header>
											<a href="#" class="image featured"><img src="images/s_building.jpg" alt="" /></a>
											<h3>Empaty Respect and Love</h3>
											<p>To be a professsionally managed premier institution within all judging parameters 
												that provides an environment where excellence, holistic growth is nurtured. 
												Students are prepared for a ever evolving society and develop lifelong learning skills.<br>

												Silver Valley aims to provide an exciting all around education to create global citizens
												 through the values of love,empathy,respect and discipline.
											</p>
										</article>

									<!-- Post -->
										<article class="box post">
											<header>
												<h2><a href="#">Accomplishments(Make carousel)</a></h2>
											</header>
											<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
											<h3>You should probably check out her work</h3>
											<!-- <p>Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit
											ligula vel quam viverra sit amet mollis tortor congue. Sed quis mauris
											sit amet magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											in, tristique at erat lorem ipsum dolor sit amet lorem ipsum sed consequat
											magna tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros
											consequat magna tempus lorem ipsum consequat Phasellus laoreet massa id
											justo mattis pharetra. Fusce suscipit ligula vel quam viverra sit amet
											mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique.
											Curabitur leo nibh, rutrum malesuada.</p>
											<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat
											Phasellus laoreet massa id justo mattis pharetra. Fusce suscipit ligula
											vel quam viverra sit amet mollis tortor congue. Sed quis mauris sit amet
											magna accumsan tristique. Curabitur leo nibh, rutrum eu malesuada in,
											tristique at erat. Curabitur leo nibh, rutrum eu malesuada in, tristique
											at erat lorem ipsum dolor sit amet lorem ipsum sed consequat magna
											tempus veroeros lorem sed tempus aliquam lorem ipsum veroeros consequat
											magna tempus.</p> -->
											<ul class="actions">
												<li><a href="#" class="button icon solid fa-file">Continue Reading</a></li>
											</ul>
										</article>

								</div>

							<!-- Sidebar -->
								<div id="sidebar" class="col-4 col-12-medium">
								<?php 

							include('config.php');
							$sql = 'SELECT * FROM notices';
							$result = mysqli_query($conn,$sql);
							$notices = mysqli_fetch_all($result,MYSQLI_ASSOC);


								?>

								<?php foreach($notices as $notice){?>
									<!-- Excerpts -->
										<section>
											<ul class="divided">
												<li>

													<!-- Excerpt -->
														<article class="box excerpt">
															<header>
																<span class="date"><?php echo htmlspecialchars($notice['Dated']);?></span>
																<h3><a href="#"><?php echo htmlspecialchars($notice['Title']);?></a></h3>
															</header>
															<p><?php echo htmlspecialchars($notice['Content']);?></p>
														</article>

												</li>
											</ul>
										</section>
										<?php }?>
									<!-- Highlights -->
										<section>
											<ul class="divided">
												<li>

													<!-- Highlight -->
														<article class="box highlight">
															<header>
																<h3><a href="#">Principal stuff</a></h3>
															</header>
															<a href="#" class="image left"><img src="images/pic06.jpg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button icon solid fa-file">Learn More</a></li>
															</ul>
														</article>

												</li>
												<li>

													<!-- Highlight -->
														<!-- <article class="box highlight">
															<header>
																<h3><a href="#">Something of less note</a></h3>
															</header>
															<a href="#" class="image left"><img src="images/pic07.jpg" alt="" /></a>
															<p>Phasellus sed laoreet massa id justo mattis pharetra. Fusce suscipit ligula vel quam
															viverra sit amet mollis tortor congue magna lorem ipsum dolor et quisque ut odio facilisis
															convallis. Etiam non nunc vel est suscipit convallis non id orci. Ut interdum tempus
															facilisis convallis. Etiam non nunc vel est suscipit convallis non id orci.</p>
															<ul class="actions">
																<li><a href="#" class="button icon solid fa-file">Learn More</a></li>
															</ul>
														</article> -->

												</li>
											</ul>
										</section>
									
								</div>

						</div>
					</div>
				</section>

			<!-- Footer -->
				<section id="footer">
					<div class="container">
						<header>
							<h2>Questions or comments? <strong>Get in touch:</strong></h2>
						</header>
						<div class="row">
							<div class="col-6 col-12-medium">
								<section>
									<form method="POST" action="contact_us.php">
										<div class="row gtr-50">
											<div class="col-6 col-12-small">
												<input name="name" placeholder="Name" type="text" required>
											</div>
											<div class="col-6 col-12-small">
												<input name="email" placeholder="Email" type="text" required>
											</div>
											<div class="col-12">
												<textarea name="message" placeholder="Message" required></textarea>
											</div>
				
											<div class="col-12">
												<input type="submit" class="btn btn-primary">
											</div>
									
										</div>
									</form>
								</section>
							</div>
							<div class="col-6 col-12-medium">
								<section>
									<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phaselamet
									mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur
									leo nibh, rutrum eu malesuada.</p>
									<div class="row">
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon solid fa-home">
													1234 Somewhere Road<br />
													Mumbai, MH 464-223<br />
													India
												</li>
												<li class="icon solid fa-phone">
													(022) 213-0831
												</li>
												<li class="icon solid fa-envelope">
													<a href="#">svalley@gmail.com</a>
												</li>
											</ul>
										</div>
										<div class="col-6 col-12-small">
											<ul class="icons">
												<li class="icon brands fa-twitter">
													<a href="#">@SilverValleyInstitute</a>
												</li>
												<li class="icon brands fa-instagram">
													<a href="#">instagram.com/SilverValleyInstitute</a>
												</li>
												<li class="icon brands fa-facebook-f">
													<a href="#">facebook.com/SilverValleyInstitute</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
						
						</ul>
					</div>
				</section>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>