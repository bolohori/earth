<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php echo $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link media="all" rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="main-content">
	<nav class="navbar navbar-expand-sm navbar-main">
		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Brand/logo -->
		<a class="navbar-brand" href="/">
		<img src="assets/images/logo.png" alt="Earth.com" />
		</a>

		<!-- Links -->
		<ul class="navbar-nav">
		<li class="nav-item">
		  <a class="nav-link" href="news.php">News</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="videos.php">Videos</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="images.php">Images</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="store.php">Store</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="earthpedia.php">Earthpedia</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="plantsnap.php">Plantsnap</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="take-action.php">Take Action</a>
		</li>
		</ul>

		<!-- Search bar -->
		<form class="search">
			<input type="text" class="search-box" name="search-box" id="search-box" placeholder="Search this site...">
			<label for="search-box" class="search-box-label">
			<span class="search-icon">Search</span>
			</label>
			<span class="search-close">
			<i class="search-close-icon">Close</i>
			</span>
		</form>

		<!-- Subscribe button -->
		<button type="button" class="btn btn-outline-primary btn-subscribe">SUBSCRIBE</button>
	</nav>
