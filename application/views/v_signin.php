<!DOCTYPE html>
<html>
<head>
	<title> Bitly. The power of the link.</title>
	<link rel="icon" href="<?php echo base_url();?>assets/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/registration.css">
	<script src="//use.typekit.net/mys2uzu.js"></script>
	<script>try{Typekit.load();}catch(e){}</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="login-container">
		<div class="container">
			<div class="row">
				<div class="login-brand mx-auto">
					<img src="<?php echo base_url();?>assets/bitly.png" style="max-height: 100%;" alt="Bitly">
				</div>
			</div>
			<br />
			<div class="row">
				<h3 class="tagline">SIGN IN &amp; START SHARING</h3>
			</div>
			<br>
			<div class="row">
				<div class="social-sign-in">
					<span class="susi-with">SIGN IN WITH:</span>
					<a rel="nofollow" href="#" class="susi-btn google-susi-btn button" data-network="google"><img src="//d1ayxb9ooonjts.cloudfront.net/8bc625062aeffa94729b9336243bed9d.svg" alt="Google" width="20"></a>
					<a rel="nofollow" href="#" class="susi-btn facebook-susi-btn button" data-network="facebook"><img src="//d1ayxb9ooonjts.cloudfront.net/0e5903c8a59540fefb8d56fe51863bb0.svg" alt="Facebook" width="20"></a>
					<a rel="nofollow" href="#" class="susi-btn twitter-susi-btn button" data-network="twitter"><img src="//d3h5jhobc20ump.cloudfront.net/b8221293363ccb5ce7460067acbe55f5.svg" alt="Twitter" width="22"></a>
				</div>
			</div>
			<br>
			<div class="row">
				<p class="separator t-center">
					<span>OR</span>
				</p>
			</div>
			<br>
			<form method="POST">
				<div class="row">
					<input type="text" class="form-control" id="usr" name="username" placeholder="Email address or username">
					<?php echo form_error('username','<span class="error_text">', '</span>'); ?>
				</div>
				<br>
				<label class="row label-pass">
					<input type="password" class="form-control" id="pass" name="password" placeholder="Password">
					<a class="forgot-pass" href=""> Forgot? </a>
					<?php echo form_error('password','<span class="error_text">', '</span>'); ?>
				</label>
				<div class="row">
				<?php echo '<span class="error_text">'.$this->session->flashdata('error_message').'</span>'; ?>
				</div>
				<br>
				<div class="row">
					<input type="submit" class="button button-primary sign-up-in" value="Sign in" tabindex="5">
				</div>
				<br>
				<div class="switch to-sign-up" href="/a/sign_up" tabindex="7">
					<span class="gray-link">Don't have an account?</span> 
					<a href="/a/sign_up">Sign Up Now</a>
				</div>
				<div class="switch"><a href="#" tabindex="9">Sign In with SSO</a></div>
			</form>
		</div>

	</div>
</body>
</html>