<?php
	$full_name = $_SERVER['PHP_SELF'];		// var "full_name" will be the path to the .php file ... in my case "/2ndSemester/thementalist/index.php"
	$name_array = explode('/',$full_name);	// var "name_array" will separate and make as many arrays as many "/" the paht has ... in my case "Array ( [0] => [1] => 2ndSemester [2] => thementalist [3] => index.php )"
	$count = count($name_array);			// var "count" will give the number of arrays "name_array" has ... in my case 4 (including 0)
	$page_name = $name_array[$count-1];		// var page_name will be the last array, which is the .php file name ... in my case "index.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="author" content="">

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/_assets/img/icons/">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/_assets/img/icons/">
	<link rel="apple-touch-icon-precomposed" sizes="72x72"   href="/_assets/img/icons/">
	<link rel="apple-touch-icon-precomposed" sizes="57x57"   href="/_assets/img/icons/">

	<link rel="shortcut icon" href="/_assets/img/icons/favicon.ico">

	<!-- Le styles -->
	<link rel="stylesheet" type='text/css' href="/_assets/css/stylesheet.css">

</head>
<body>

	<!-- Google Analytics Tracking -->
	<?php include_once("/_assets/includes/analyticstracking.php"); ?>
	
	<!-- Main container -->
	<div class="container">
		<header>

			<!-- Desktop Navigation -->
			<nav id="desktop-nav" class="visible-desktop">
			  <ul>
				<?php include("/_assets/includes/public/public-nav.inc.php"); ?>
			  </ul>
			</nav>

			<!-- Tablet Navigation -->
			<nav id="tablet-nav" class="nav visible-tablet">
			  <ul>
				<?php include("/_assets/includes/public/public-nav.inc.php"); ?>
			  </ul>
			</nav>

			<!-- Phone Navigation -->
			<nav id="phone-nav" class="nav visible-phone">
			  <ul>
				<?php include("/_assets/includes/public/public-nav.inc.php"); ?>
			  </ul>
			</nav>

			<div id="lang-options">
				<ul>
					<li><a href="/"> DK</a></li>
					<li><a href="/"> EN</a></li>
					<li><a href="#login-modal" role="button" data-toggle="modal"> Login</a></li>
				</ul>
			</div>


			<!-- Login Modal -->
			<form id="login-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true" action="#" method="post">
				<div class="modal-header">
					<h3 class="muted">Login</h3>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				</div>

				<div class="modal-body text-center">
					<span class="">Please login</span>
					
					<div class="control-group">
					  <div class="controls">
						<div class="input-prepend">
						  <span class="add-on"><i class="icon-envelope"></i></span>
						  <input name="email" type="email" maxlength="50" placeholder="Email address">
						</div>
					  </div>
					</div>

					<div class="control-group">
					  <div class="controls">
						<div class="input-prepend">
						  <span class="add-on"><i class="icon-asterisk"></i></span>
						  <input name="password" type="password" maxlength="50" placeholder="Password">
						</div>
					  </div>
					</div>

					<button type="submit" class="btn btn-success btn-large">Login <i class="icon-user icon-white"></i></button>
					<div id="login-alert-box"></div>
				</div>

				<div class="modal-footer">
					<a class="pull-left" data-toggle="modal" data-dismiss="modal" aria-hidden="true" href="#ForgotPasswordModal">Forgot Your Password?</a>
					<p>Not a Member yet? <a data-toggle="modal" data-dismiss="modal" aria-hidden="true" href="#RegisterModal"><i class="icon-pencil"></i> Register</a></p>
			  	</div>
			</form>
		</header>