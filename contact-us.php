<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- <link rel="icon" href="../../favicon.ico"> -->

		<!-- Custom styles for this template -->
		<link href="assets/css/main.css" rel="stylesheet">

		<!-- Bootstrap core CSS -->
		<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->

		<title>Recycle Today</title>
	</head>
	<body>
		<header class="primary-header container group">
			<h1 class="logo"><a href="index.html">Recycle <br> Today</a></h1>
			<nav class="nav primary-nav">
				<ul>
					<li><a href="./index.html">Home</a></li>
					<!-- <li><a href="">Sell</a></li> -->
					<li><a href="./donate/donate.html">Donate</a></li>
					<!-- <li><a href="">Buy</a></li> -->
					<li><a href="pickme/pickme.html">Pick Me</a></li>
					<li><a href="about-us.html">About Us</a></li>
					<li><a href="./contact-us.php">Contact Us</a></li>					
					<!-- <li><a href="register.html">Register</a></li> -->
				</ul>
			</nav>
		</header>
		<?php if(isset($_POST['form_submitted'])): ?>
		<section class="row-alt">
			<div class="lead container">
			<h2> Thank you for the message <?php echo ucfirst($_POST['name']); ?>. We will get back to you soon.</h2>
			</div>
		</section>
			<?php 
				$to_email = 'dsilvaflora2@gmail.com';
				$subject = $_POST['subject'];
				$message = $_POST['message'];
				$headers = 'From:'.$_POST['email'];
				mail($to_email, $subject, $message, $headers);
				$_POST = array(); 
			?>
		<?php else: ?>
		<section>
			<div class="donate">
				<section class="inner">
					<form action="#" method="post">
						<fieldset class="register-group">						
							<label>
							Name:
							<input type="text" name="name" placeholder="Full name" required>
							</label>

							<label>
							Email:
							<input type="email" name="email" placeholder="Email address" required>
							</label>

							<label>
							Contact:
							<input type="text" name="contact" placeholder="Contact No.">
							</label>

							<label>
							Subject:
							<input type="text" name="subject" required placeholder="Subject">
							</label>

							<label>
							Message:
							<textarea name="message"></textarea>
							</label>

							<input type="hidden" name="form_submitted" value="1">
						</fieldset>
						<input class="submit btn btn-default" type="submit" value="Submit">
					</form>
				</section>
			</div>
		</section>
		<?php endif; ?>
		<footer class="primary-footer container group">
			<small>&copy;Recycle Today</small>
			<nav class="nav">
				<a href="index.html">Home</a>
				<!-- <a href="">Sell</a> -->
				<a href="donate/donate.html">Donate</a>
				<!-- <a href="">Buy</a> -->
				<a href="pickme/pickme.html">Pick Me</a>
				<a href="about-us.html">About Us</a>
				<a href="./contact-us.php">Contact Us</a>
				<!-- <a href="register.html">Register</a> -->
			</nav>
		</footer>
		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
		<!-- <script src="../../dist/js/bootstrap.min.js"></script> -->
	</body>
</html>