<!DOCTYPE html>
<html lang="en">

<?php
	$full_name = $_SERVER['PHP_SELF'];		// var "full_name" will be the path to the .php file ... in my case "/2ndSemester/thementalist/index.php"
	$name_array = explode('/',$full_name);	// var "name_array" will separate and make as many arrays as many "/" the paht has ... in my case "Array ( [0] => [1] => 2ndSemester [2] => thementalist [3] => index.php )"
	$count = count($name_array);			// var "count" will give the number of arrays "name_array" has ... in my case 4 (including 0)
	$page_name = $name_array[$count-1];		// var page_name will be the last array, which is the .php file name ... in my case "index.php"
?>

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Rene Ollino">

    <!-- Le styles -->
    <link rel="stylesheet" type='text/css' href='http://fonts.googleapis.com/css?family=Qwigley'>
	<link rel="stylesheet" type='text/css' href="css/AwakenStylesheet.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="bootstrap-github/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="">
	<link rel="apple-touch-icon-precomposed" sizes="72x72"   href="">
	<link rel="apple-touch-icon-precomposed" sizes="57x57"   href="">
	
	<link rel="shortcut icon" href="ico/favicon.ico">
</head>

<body>

	<div class="container">
	
      <div class="masthead">

        <div class="navbar navbar-fixed-top visible-tablet" style="position: absolute;">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
              	<?php include("php/nav.inc.php") ?>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->


		<div class="row-fluid">
			<div class="btn-toolbar pull-right">
				<div class="btn-group">
					<a class="btn btn-small btn-info" href="#"><i class="icon-user"></i> Login</i></a>
					<a class="btn btn-small" href="#">Register</a>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="pull-left">
				<a class="logo hidden-phone" href="coaching.php">
					<img src="img/AEC_logo_big.png" alt="Awaken Empowerment Coaching Logo" class="big-logo">
				</a>

				<a class="logo visible-phone" href="coaching.php" >
					<img src="img/AEC_logo_small.png" alt="Awaken Empowerment Coaching Logo" class="small-logo">
				</a>
			</div>

			<div class="container  visible-phone pull-right">
              <ul class="nav pull-right text-right">
              	<?php include("php/nav.inc.php") ?>
              </ul>
            </div>
		</div>

        <div class="navbar visible-desktop">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
              	<?php include("php/nav.inc.php") ?>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->

	</div><!-- /.masterhead -->