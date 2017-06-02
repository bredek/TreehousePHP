<?php 
include("inc/functions.php");
?>
<html>

<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="./">Personal Media Library</a></h1>

			<ul class="nav">
				<li class="books <?php echo set_active_menu($section, "books"); ?>"><a href="catalog.php?cat=books">Books</a></li>
				<li class="movies <?php echo set_active_menu($section, "movies"); ?>"><a href="catalog.php?cat=movies">Movies</a></li>
				<li class="music <?php echo set_active_menu($section, "music"); ?>"><a href="catalog.php?cat=music">Music</a></li>
				<li class="suggest <?php echo set_active_menu($section, "suggest"); ?>"><a href="suggest.php">Suggest</a></li>
			</ul>

		</div>

	</div>

	<div id="content">