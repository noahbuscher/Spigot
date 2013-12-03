<html>
	<head>
		<title>:: Spigot ::</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,600' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo the_stylesheet(); ?>">
	</head>
	<body>
		<div class="wrap">
			<?php while(have_feed()) : thefeed() ?>
					<div class="item">
						<a href="<?php echo the_link(); ?>"><h1><?php echo the_title(); ?></h1></a>
						<h2><?php echo the_date(); ?></h2>
						<p>
							<?php echo the_description(); ?>
						</p>
					</div>
			<?php endwhile; ?>
		</div>
		<footer>
			Spigot
		</footer>
	</body>
</html>