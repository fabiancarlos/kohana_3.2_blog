<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<meta name="description" content=" <?php echo $description; ?>" />
	<title><?php echo $site_name; ?></title>
	
	<?php foreach ($styles as $style): ?>
		<link rel="stylesheet" href="<?php echo URL::base(); ?>media/css/<?php echo $style; ?>.css" type="text/css" media="screen" />
	<?php endforeach ?>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="media/js/jquery-1.7.2.min.js"><\/script>')</script>
	
	<?php foreach ($scripts as $script): ?>
		<script src="<?php echo URL::base(); ?>media/js/<?php echo $script; ?>.js" /></script>
	<?php endforeach ?>	
	
	<!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
		<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
	<![endif]-->
</head>
<body>

<div id="todo">

<?php echo View::factory('site/common/header'); ?>
<?php echo View::factory('site/common/menu'); ?>

<?php echo $content; ?>

<?php echo View::factory('site/common/footer'); ?>

</div>

</body>
</html>