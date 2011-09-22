<!DOCTYPE html>   
<?php include_once('includes/logic.inc'); ?>
<html lang="en">
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
	<link rel="stylesheet" href="/css/style.css?v=1">
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
      <p class="colophon">A tiny web project by Jesper Wøldiche</p>
      <p class="icons">
        <a class="twitter icon" href="http://www.twitter.com/woeldiche" title="Follow me on Twitter">
          <img src="/images/twitter-white-20px.png" alt="Follow me on Twitter" />
        </a>
        <a class="linkedin icon" href="http://dk.linkedin.com/in/woeldiche" title="Jesper Wøldiche's Linkedin profile">
          <img src="/images/linkedin-white-20px.png" alt="Linkin Profil" />
        </a>
      </p>
      <p class="legalese">
        <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">Keep Calm &amp; Clear Cache</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://dk.linkedin.com/in/woeldiche" property="cc:attributionName" rel="cc:attributionURL">Jesper Wøldiche</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution ShareAlike 3.0 License</a>.<br />Royal Druplicon Logo by <a xmlns:dct="http://purl.org/dc/terms/" href="http://fourkitchens.com/" rel="dct:source">Four Kitchens</a>.
      <a href="http://drupal.org">Drupal</a> is a <a href="http://drupal.com/trademark">registered trademark</a> of <a href="http://buytaert.net/">Dries Buytaert</a>. 
		</footer><!-- /footer -->

  <script>
    window.addEventListener("load",function() {setTimeout(function(){window.scrollTo(0,1);},0);});
  </script>
  <script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25792738-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>

</body>
</html>