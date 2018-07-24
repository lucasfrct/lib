<body style="font-family: monospace;">
<?php
	include_once("minifier.php");
	
	/* FILES ARRAYs
	 * Keys as input, Values as output */ 
	
	$js = array(
		"mailer.php"			=> "mailer.min.php"
	);
	
	$css = array(
        "mailer.php"			=> "mailer.min.php"
	);
	
	minifyJS($js);
	minifyCSS($css);
?>
</body>
