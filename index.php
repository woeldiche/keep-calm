<!DOCTYPE html>   
<?php
  $actions = array();
  // Add actions to print 
  $actions[] = 'Clear Cache'; 
  $actions[] = 'run Coder';
  $actions[] = 'Clear Cache';
  $actions[] = 'Apply patch';
  $actions[] = 'Clear Cache';
  $actions[] = 'call #drupal-support';
  // Select an action to print
  $rand_keys = array_rand($actions, 1);
  $current_action = $actions[$rand_keys];
?>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!--[if IE]><![endif]-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Keep Calm</title>
	<meta name="description" content="">
	<meta name="keywords" content="" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-icon" href="/images/keepcalm-badge.png" />
 	<!-- !CSS -->
	<link rel="stylesheet" href="css/style.css?v=1">
  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	<!-- Typekit -->
	<script type="text/javascript" src="//use.typekit.com/omu1qun.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<!-- !Body -->
<body>
		<header>
		  <img class="logo" src="/images/hm-druplicon-270.png" alt="This is joke combining Drupal and part of the Keep Calm And Carry On-posters" />
		</header>
		<section role="main" class="poster">
		  <em>Keep Calm</em>
		  <span>and</span>
		  <?php print '<em>' . $current_action . '</em>'; ?>
		</section><!-- /main -->
		<footer>
      <!-- colophon information goes here eventually -->
		</footer><!-- /footer -->
  <script>
    // When ready...
    window.addEventListener("load",function() {
      // Set a timeout...
      setTimeout(function(){
        // Hide the address bar!
        window.scrollTo(0, 1);
      }, 0);
    });
  </script>
</body>
</html>