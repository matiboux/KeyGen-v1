<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="style.css" media="all">
		<title>KeyGenerator</title>
	</head>
	<body>
		<div id="container">
			<h1><a href="index.php<?php if($_GET['lang'] != '') { ?>?lang=<?php echo $_GET['lang']; } ?>">Key Generator</a></h1>
			<?php if($_GET['lang'] == 'fr') { ?>
				<h2>G&eacute;n&eacute;rateur de cl&eacute;s al&eacute;atoires</h2>
			<?php } else { ?>
				<h2>Random Key Generator</h2>
			<?php } ?>
			<h2>
				<?php if($_GET['lang'] != 'en' AND $_GET['lang'] != '') { ?><a href="?lang=en">EN</a><?php } ?>
				<?php if($_GET['lang'] != 'fr') { ?><a href="?lang=fr">FR</a><?php } ?>
			</h2>