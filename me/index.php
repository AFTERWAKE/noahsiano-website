<?php
require 'assets/php/funfact.php';
?>
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-32367456-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-32367456-1');
		</script>
		<title>Noah Siano</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Welcome</a></li>
							<li><a href="#one">Who am I</a></li>
							<li><a href="#two">What I do</a></li>
							<li><a href="#three">Get in touch</a></li>
						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Noah Siano</h1>
							<p>Huntsville, AL resident. Software Engineer at Northrop Grumman.</p></br>
							<ul class="actions">
								<li><a href="#one" class="button scrolly">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="/projects.html" class="image"><img src="images/IMG_3327.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Projects</h2>
									<p>Custom Built Mechanical Keyboard</p>
									<p>Custom built 3 computers</p>
									<ul class="actions">
										<li><a href="/projects.html" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="/hobbies.html" class="image"><img src="images/WR250R.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Hobbies</h2>
									<p>Biking. Gaming. Electronics. Programming.</p>
									<ul class="actions">
										<li><a href="/hobbies.html" class="button">Learn more</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>What I do</h2>
							<p>As a student in Computer Engineering, I have already gone through classes on microprocessors, programming in python and C++, digital design, and other related subjects. The rest of my schooling consists of higher level circuits, working with matlab and simulink, pcb circuit design, and other similar topics.</p>
							<div class="features">
								<section>
									<span class="icon major fa-code"></span>
									<h3>Programming</h3>
									<p>
										I would consider myself proficient in Python, JavaScript, PHP,
										and Git. I have over a year of experience with these. I have
										some experience with other languages, such as C++/C, Java,
										and Assembly, and I can work well using Bash and Vim.
									</p>
								</section>
								<section>
									<span class="icon major fa-lock"></span>
									<h3>Co-Op for ADTRAN, Inc.</h3>
									<p>
										ADTRAN is a telecommunications company in Huntsville, AL.
										I started as a co-op in Fall 2016, and I worked on the Package
										Architecture Team. I mostly wrote unit tests in Python. My
										next semester was Summer 2017, and I was on the Program
										Management Team. I designed and built a website using
										Javascript and AngularJS. I will go back for my third term
										in January 2018.
									</p>
								</section>
								<section>
									<span class="icon major fa-desktop"></span>
									<h3>What I do in my free time</h3>
									<p>
										I enjoy riding dirt bikes. I have a street legal dirt bike
										that I ride to and from classes and sometimes I get some
										free time to ride it for fun. Occasionally I play video games,
										but I've never really spent much time on that. I really enjoy
										cooking a good meal at home, and I'm usually looking out for
										a new recipe.
									</p>
								</section>
								<section>
									<span class="icon major fa-chain"></span>
									<h3>Life Before College</h3>
									<p>
										I grew up in a suburb of Memphis, TN. I was in Boy Scouts from
										1st grade until I graduated high school, and I earned the rank
										of Eagle Scout at age 15. I went to Evangelical Christian
										School where I was involved in the Theatre department and
										photography for the yearbook. I decided to go into Computer
										Engineering because I loved the math I did in high school, I
										was always curious as to how things worked, and I already knew
										I liked computers.
									</p>
								</section>
								<section>
									<span class="icon major fa-cog"></span>
									<h3>Graduation Date</h3>
									<p>
										May 2019
									</p>
								</section>
								<section>
									<span class="icon major fa-diamond"></span>
									<h3>Random Fun Fact!</h3>
									<p>
										<?php phpfunfact(); ?>
									</p>

								</section>
							</div>
							<ul class="actions">
								<li><a href="about.html" class="button">Learn more</a></li>
							</ul>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Get in touch</h2>
							<div>
								<section>
									<ul class="contact">
										<li>
											<h3>City</h3>
											<span>
												Huntsville, AL
											</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="mailto:noahsiano@gmail.com">noahsiano@gmail.com</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(901)-481-3595</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="https://www.facebook.com/NoahSiano" class="fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="https://github.com/afterwake" class="fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="https://www.instagram.com/noahsiano/" class="fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="https://www.linkedin.com/in/noah-siano-2975b4149/" class="fa-linkedin"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Noah Siano. All rights reserved.</li><li>Design&Scripting: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
