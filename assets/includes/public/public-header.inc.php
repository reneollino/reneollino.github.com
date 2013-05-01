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
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description ?>">
    <meta name="author" content="">

    <!-- Le styles -->
	<link rel="stylesheet" type='text/css' href="_assets/css/stylesheet.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap-github/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons 
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
	<link rel="apple-touch-icon-precomposed" sizes="72x72"   href="">
	<link rel="apple-touch-icon-precomposed" sizes="57x57"   href=""> -->
	
	<link rel="shortcut icon" href="ico/favicon.ico">
</head>
<body>
	<?php include_once("includes/analyticstracking.php"); ?>
	<div class="container">
      <div class="masthead">
        <div class="navbar navbar-fixed-top visible-tablet" style="position: absolute;">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
              	<?php include("includes/nav.inc.php"); ?>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->


		<div class="row-fluid">
			<div class="btn-toolbar pull-right">
				<div class="btn-group">
					<a data-toggle="modal" class="btn btn-small btn-info" href="#LoginModal"><i class="icon-user icon-white"></i> Login</a>
					<a data-toggle="modal" class="btn btn-small btn-success" href="#RegisterModal">Register</a>
					<a data-toggle="modal" class="btn btn-small" href="member/">Member Site</a>
				</div>
			</div>
		</div>


		<div class="row">
			<div class="pull-left">
				<a class="logo hidden-phone" href="index.php">
					<img src="img/AEC_logo_green_big.png" alt="Awaken Empowerment Coaching Logo" class="big-logo">
				</a>

				<a class="logo visible-phone" href="index.php" >
					<img src="img/AEC_logo_green_small.png" alt="Awaken Empowerment Coaching Logo" class="small-logo">
				</a>
			</div>

			<div class="container  visible-phone pull-right">
              <ul class="nav pull-right text-right">
              	<?php include("includes/nav.inc.php") ?>
              </ul>
            </div>
		</div>

        <div class="navbar visible-desktop">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
              	<?php include("includes/nav.inc.php") ?>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->

	</div><!-- /.masterhead -->

<!-- Login Modal -->
<form id="LoginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-hidden="true" action="#" method="post">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 class="muted">Login</h3>
  </div>

	<div class="modal-body text-center">
	  	<img src="img/AEC_logo_green_small.png" alt="Awaken Empowerment Coaching Logo">
	    <span class="handwritten big green">Please login</span>
		
			    <div class="control-group">
				  <div class="controls">
				    <div class="input-prepend">
				      <span class="add-on"><i class="icon-envelope"></i></span>
				      <input name="email" type="email" maxlength="50" placeholder="Email address" ><br>
				    </div>
				  </div>
				</div>

			    <div class="control-group">
				  <div class="controls">
				    <div class="input-prepend">
				      <span class="add-on"><i class="icon-asterisk"></i></span>
					  <input name="password" type="password" maxlength="50" placeholder="Password" ><br>
				    </div>
				  </div>
				</div>

			<button type="submit" class="btn btn-success btn-large">Login <i class="icon-user icon-white"></i></button>
			<div class="login_message"></div>
	</div>

	<div class="modal-footer">
		<a class="pull-left" data-toggle="modal" data-dismiss="modal" aria-hidden="true" href="#ForgotPasswordModal">Forgot Your Password?</a>
		<p>Not a Member yet? <a data-toggle="modal" data-dismiss="modal" aria-hidden="true" href="#RegisterModal"><i class="icon-pencil"></i> Register</a></p>
  	</div>
</form>