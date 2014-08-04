<?php include("logic.php");?>

<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns= "http://www.w3.org/1999/xhtml">
<head>
	<title>Doppel</title>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- prefix free css -->
	<link href="/js/prefixfree.min.js">
	<!-- Add to homescreen -->

	<?php
	if ($_SERVER['REQUEST_URI'] == '/index.php') { ?>
	<link rel="stylesheet" type="text/css" href="css/addtohomescreen.css">
	<script src="js/addtohomescreen.min.js"></script>
	<script>
	addToHomescreen({
	   startDelay: 5,
   	   maxDisplayCount: 1
	});
	</script>
	<?php } ?>
	
	<!-- html5 shiv -->
	<script type="application/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>

	<link rel="icon" type="image/png" href="/doppel/apple-touch-icon.png">
	<link rel="apple-touch-icon" href="/doppel/apple-touch-icon.png"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui">
		
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">

	<!-- prevents links from opening in new window when in homescreen safari -->
	<script type="text/javascript">
	       $(function() {
	         $('a').click(function() {
	           document.location = $(this).attr('href');
	           return false;
	         });
	       });
   </script>

</head>

	<body>