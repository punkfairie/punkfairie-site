<?php
	$counter = file_get_contents('counter.txt') + 1;
	file_put_contents('counter.txt', $counter);
	$digits = str_split($counter);
?>

<!DOCTYPE html>
<html>

<head>
	<title>punkfairie.net</title>
	<link rel="stylesheet" type="text/css" href="style/reset.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">

	<!-- favicon -->
	<link rel="icon" href="style/img/favicon.png" type="image/png">

	<!-- jquery CDN -->
	<script src="https://code.jquery.com/jquery-3.6.0.js"
	integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
	crossorigin="anonymous"></script>
</head>

<body id="index">
	<header>
		<img src="style/img/header.png">
	</header>

	<aside>
		<div class="box22" id="side1">
			<div class="box-top">
				<div class="u01"></div>
			</div>
			<div class="box-center">
				<div class="box-inner">
					<?php include 'side.php'; ?>
				</div>
			</div>
			<div class="box-bottom">
				<div class="s01"></div>
			</div>
		</div>

		<div class="box22" id="side2">
			<div class="box-top">
				<div class="u01"></div>
			</div>
			<div class="box-center">
				<div class="box-inner">
					<?php include 'social.php'; ?>
				</div>
			</div>
			<div class="box-bottom">
				<div class="s01"></div>
			</div>
		</div>
	</aside>

	<main>
		<div class="box22">
			<div class="box-top">
				<div class="u01"></div>
			</div>
			<div class="box-center">
				<div class="box-inner">
					<div id="content"></div>

					<footer>punkfairie &copy; 2022</footer>
				</div>
			</div>
			<div class="box-bottom">
				<div class="s01"></div>
			</div>
		</div>
	</main>

	<nav>
		<div class="box22">
			<div class="box-top">
				<div class="u01"></div>
			</div>
			<div class="box-center">
				<div class="box-inner">
					<?php include 'nav.php'; ?>
				</div>
			</div>
			<div class="box-bottom">
				<div class="s01"></div>
			</div>
		</div>

		<div class="box22" id="nav2">
			<div class="box-top">
				<div class="u01"></div>
			</div>
			<div class="box-center">
				<div class="box-inner" id="nav2"></div>
			</div>
			<div class="box-bottom">
				<div class="s01"></div>
			</div>
		</div>
	</nav>

	<script type="text/javascript">
		$(document).ready(function() {
			var line = '<div class="h2-line"></div>';
			$('aside h2').append(line);
			$('nav h2').prepend(line);
		});
	</script>

	<!-- external scripts -->
	<script src="page-switch.js"></script>
	<script src="sparkle-cursor.js"></script>
</body>
</html>