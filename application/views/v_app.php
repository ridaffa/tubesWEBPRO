<html>
	<head>
		<title>Bitly | Bitlink Management</title>
		<link rel="icon" href="<?php echo base_url();?>assets/favicon.ico">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		
	</head>
	<body>
		<div>
			<nav class="nav-bar">
				<div class="bitly-logo">
					<a><img class="bitly-img"src="<?php echo base_url();?>assets/bitly-logo.png"></a>
					<div class="bit">
						<div class="bitlinks-text">
							<span class="bitlinks"> BITLINKS </span>
						</div>
						<div class="arrowd">
							<img class="arrow-down"src="<?php echo base_url();?>assets/arrow-down.png">
						</div>
						<div class="dropdown-bitlinks">
							<ul class="dropdown--list list-unstyled">
							  <li class="dropdown--item selected"><span class="dropdown--label">BITLINKS</span><span class="no_bitlinks-icon" alt="no_bitlinks-icon"></span></li>
							  <li class="dropdown--item locked"><span class="dropdown--label">DASHBOARD</span><span class="dropdown--upgradeLabel">Upgrade</span></li>
							  <li class="dropdown--item locked"><span class="dropdown--label">CUSTOM BITLINKS</span><span class="dropdown--upgradeLabel">Upgrade</span></li>
							  <li class="dropdown--item locked"><span class="dropdown--label">CAMPAIGNS</span><span class="dropdown--upgradeLabel">Upgrade</span></li>
							</ul>
						</div>
					</div>

					<div class="burger-btn">
					  <div class="bar1"></div>
					  <div class="bar2"></div>
					  <div class="bar3"></div>
					  <div class="bar4"></div>
					</div>
					<span class="line-space">
						<div class="group-own">
							<a>USERNAME</a>
						</div>
					</span>
					<div class="create-btn-arrow">
						<img class="arrow-down"src="<?php echo base_url();?>assets/arrow-down.png">
						<div class="arrow-drop">
							<ul class="dropdown--list list-unstyled">
							  <li class="dropdown--item"><span class="dropdown--label">BITLINK</span></li>
							  <li class="dropdown--item"><span class="dropdown--label">CAMPAIGN</span><span class="unlock-icon" alt="unlock-icon"></span></li>
							</ul>
						</div>
					</div>

					<div class="create-btn">
						<a>CREATE</a>
					</div>
					<form class="search-form">
						<div>
							<input type="search" maxlength="100" class="search-input" placeholder="SEARCH" value="">
							<a class="material-icons search-icon">search</a>
						</div>
					</form>
				</div>
			</nav>
		</div>
		<div class="full-wrap">
			<div class="side-bar-main">
				<div class="side-bar-header">
					<span class="side-bar-header-text">YOUR ACCOUNT</span>
					<a href="javascript:void(0)"  class="side-bar-close">&#10006;</a>
				</div>
				<div class="side-bar-content">
					<div class="container">
						<div class="row row-side-main cursor-pointer"">
							<div class="col-md-3 pl-0">
								<img class="user-account-image" src="<?php echo base_url();?>assets/chauncey.svg">
							</div>
							<div class="col-md-6" style="padding-top: 9px;padding-left: 5px;">
								<div class="user-account-text"><a>username</a></div>
								<div class="user-account-text"><a>email@email.com</a></div>
							</div>
							<div class="col-md-3" style="padding-top: 9px;padding-left: 30px;">
								<img class="user-account-arrow-right" src="<?php echo base_url();?>assets/arrow-right.png">
							</div>
						</div>
						<div class="row content-text-title">
							<span> OPTIONS </span>
						</div>
						<div class="row content-row cursor-pointer">
							<div class="col-md-10 pl-0">
								<a class="content-text">Settings</a>
							</div>
							<div class="col-md-2">
								<img class="content-arrow-right" src="<?php echo base_url();?>assets/arrow-right.png">
							</div>
						</div>
						<div class="row content-row cursor-pointer">
							<div class="col-md-10 pl-0">
								<a class="content-text">Resources</a>
							</div>
							<div class="col-md-2">
								<img class="content-arrow-right" src="<?php echo base_url();?>assets/arrow-right.png">
							</div>
						</div>
						<div class="row content-row cursor-pointer">
							<div class="col-md-12 pl-0">
								<a class="content-text">Sign out</a>
							</div>
						</div>
						<div class="row pro-tip">
							<p class="pro-tip-text">PRO TIP: Automate how you create, share & track your Bitlinks with our API. 
								<a class="marketing-module--text" target="_blank" href="https://bitly.is/api-use-cases">Learn more<span class="arrow-icon" alt="arrow-icon"></span></a>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div id="side-bar-01"class="side-bar-account">
				<div class="side-bar-header">
					<img id="back-01"class="user-account-arrow-left cursor-pointer" src="<?php echo base_url();?>assets/arrow-left.png">
					<span class="side-bar-header-text">EDIT PROFILE</span>
					<a href="javascript:void(0)" class="side-bar-close">&#10006;</a>
				</div>
				<div class="side-bar-content side-account">
					<div class="container">
						<div id="account-name" class="row pro-tip account-name">
							<label class="input-field--label">Full Name</label>
							<input type="text" name="user" id="username-input" class="username-input"></input>
						</div>
						<br>
						<div id="show-email" class="row content-row content-account cursor-pointer">
							<div class="col-md-10 pl-0">
								<a class="content-text">Email</a>
							</div>
							<div class="col-md-2">
								<img class="content-arrow-right" src="<?php echo base_url();?>assets/arrow-right-black.png">
							</div>
						</div>
						<div id="show-change-pass" class="row content-row content-account cursor-pointer">
							<div class="col-md-10 pl-0">
								<a class="content-text">Change Password</a>
							</div>
							<div class="col-md-2">
								<img class="content-arrow-right" src="<?php echo base_url();?>assets/arrow-right-black.png">
							</div>
						</div>
						<div class="row content-row content-account cursor-pointer">
							<div class="col-md-10 pl-0">
								<a class="content-text">Security</a>
							</div>
							<div class="col-md-2">
								<img class="content-arrow-right" src="<?php echo base_url();?>assets/arrow-right-black.png">
							</div>
						</div>
						<div class="row content-row content-account cursor-pointer">
							<div class="col-md-10 pl-0">
								<a class="content-text">Generic Access Token</a>
							</div>
							<div class="col-md-2">
								<img class="content-arrow-right" src="<?php echo base_url();?>assets/arrow-right-black.png">
							</div>
						</div>
						<div class="row content-row content-account cursor-pointer">
							<div class="col-md-10 pl-0">
								<a class="content-text">Registered OAuth Applications</a>
							</div>
							<div class="col-md-2">
								<img class="content-arrow-right" src="<?php echo base_url();?>assets/arrow-right-black.png">
							</div>
						</div>
						<div class="row content-row content-account cursor-pointer">
							<div class="col-md-10 pl-0">
								<a class="content-text">Default API Group</a>
							</div>
							<div class="col-md-2">
								<img class="content-arrow-right" src="<?php echo base_url();?>assets/arrow-right-black.png">
							</div>
						</div>
						<div class="row content-row content-account cursor-pointer">
							<div class="col-md-10 pl-0">
								<a class="content-text">Notifications</a>
							</div>
							<div class="col-md-2">
								<img class="content-arrow-right" src="<?php echo base_url();?>assets/arrow-right-black.png">
							</div>
						</div>
						<div class="row">
							<a href="#"class="bottom-text-account">Request GDPR SAR Report <span href="#" class="small-bottom-text-account">[?]
							<div class="tooltip--content">Click to request a Subject Access Request (SAR) Report of all your Personal Information stored by Bitly. Once requested, in compliance with GDPR Article 12, section 3.1, we will reply to your request via email within 1 month of the request date.</div></span></a>
						</div>
						<div class="row">
							<a href="#"class="bottom-text-account">Delete Account </a>
						</div>

					</div>

				</div>
				<div id="save-account" class="save-bottom">
					<button id="save-account-btn" class="save-button">SAVE</button>
				</div>
			</div>
			<div id="side-bar-email"class="side-bar-account">
				<div class="side-bar-header">
					<img id="back-email"class="user-account-arrow-left cursor-pointer" src="<?php echo base_url();?>assets/arrow-left.png">
					<span class="side-bar-header-text">EMAIL</span>
					<a href="javascript:void(0)" class="side-bar-close">&#10006;</a>
				</div>
				<div class="side-bar-content side-account">
					<div class="container">
						<div class="row">
							<p class="side-text">Only your <b>primary email address</b> will be used as your login credentials and used to receive any account related notifications</p>
						</div>
						<div  class="row content-row content-account cursor-pointer">
							<div class="col-md-10 pl-0">
								<a class="content-text">email@email</a>
								<div class="side-text">
									<a>Primary email used for login</a>
								</div>
								<div class="side-text">
									<a>Your email address is <span class="email-verified">verified</span>.</a>
								</div>
							</div>
							<div class="col-md-2 mt-3">
								<img class="content-arrow-right" src="<?php echo base_url();?>assets/arrow-right-black.png">
							</div>
						</div>
						<div id="add-email" class="row content-row content-account cursor-pointer">
							<div class="col-md-10 pl-0">
								<a class="content-text">Add new email</a>
							</div>
							<div class="col-md-2">
								<img class="content-arrow-right" src="<?php echo base_url();?>assets/arrow-right-black.png">
							</div>
						</div>
					</div>

				</div>
			</div>
			<div id="side-bar-add-new-email" class="side-bar-account">
				<div class="side-bar-header">
					<img id="back-add-email"class="user-account-arrow-left cursor-pointer" src="<?php echo base_url();?>assets/arrow-left.png">
					<span class="side-bar-header-text">ADD NEW EMAIL</span>
					<a href="javascript:void(0)" class="side-bar-close">&#10006;</a>
				</div>
				<div class="side-bar-content side-account">
					<div class="container">
						<div id="input-email" class="row pro-tip account-name">
							<label class="input-field--label">email</label>
							<input type="text" name="email" id="email-input"class="username-input"></input>
						</div>
					</div>
				</div>
				<div id="save-email" class="save-bottom">
					<button id="save-email-btn" class="save-button">SAVE</button>
				</div>
			</div>
			<div id="side-bar-change-pass" class="side-bar-account">
				<div class="side-bar-header">
					<img id="back-change-pass"class="user-account-arrow-left cursor-pointer" src="<?php echo base_url();?>assets/arrow-left.png">
					<span class="side-bar-header-text">CHANGE PASSWORD</span>
					<a href="javascript:void(0)" class="side-bar-close">&#10006;</a>
				</div>
				<div class="side-bar-content side-account">
					<div class="container">
						<div id="old-pass-div" class="row pro-tip account-name">
							<label class="input-field--label">CURRENT PASSWORD</label>
							<input type="text" name="old-pass" id="old-pass" class="username-input"></input>
						</div>
						<br>
						<div id="new-pass-div" class="row pro-tip account-name">
							<label class="input-field--label">NEW PASSWORD</label>
							<input type="text" name="new-pass" id="new-pass"class="username-input"></input>
						</div>
						<br>
						<div id="conf-pass-div" class="row pro-tip account-name">
							<label class="input-field--label">CONFIRM PASSWORD</label>
							<input type="text" name="conf-pass" id="conf-pass"class="username-input"></input>
						</div>
					</div>
				</div>
				<div id="save-email" class="save-bottom" style="bottom:25px;">
					<button id="change-pass-btn" class="save-button">SAVE</button>
				</div>
			</div>
		</div>
	</body>
	<script src="<?php echo base_url();?>assets/js/app.js"></script>
</html>