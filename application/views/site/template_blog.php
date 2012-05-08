<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="<?php echo $X_UA_Compatible; ?>" />
	<meta name="viewport" content="<?php echo $viewport; ?>" />
	<meta name="robots" content="index, follow" />
    <meta name="GOOGLEBOT" content="index, follow" />
	<meta name="author" content="<?php echo $author; ?>" />
	<meta name="reply-to" content="<?php echo $reply_to; ?>" />
	<meta name="description" content=" <?php echo $description; ?>" />
	<title><?php echo $site_name; ?></title>

	<link rel="shortcut icon" href="<?php echo $shortcut_icon; ?>" />
	
	<?php foreach ($styles as $style): ?>
		<link rel="stylesheet" href="<?php echo URL::base(); ?>media/css/<?php echo $style; ?>.css" type="text/css" media="screen" />
	<?php endforeach ?>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>
	
	<?php foreach ($scripts as $script): ?>
		<script src="<?php echo URL::base(); ?>media/js/<?php echo $script; ?>.js" /></script>
	<?php endforeach ?>	
	
	<!-- CKEDITOR -->
	<script type="text/javascript" src="<?php echo URL::base(); ?>media/ckeditor/ckeditor.js"></script>
	
	<script>
		var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']]; // Change UA-XXXXX-X to be your site's ID
		(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
		g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
		s.parentNode.insertBefore(g,s)}(document,'script'));
	</script>

	<!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
		<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
	<![endif]-->
</head>
<body>

<?php echo $content; ?>

</body>
</html>