<section id="<?php echo $navId; ?>" class="main-navigation">
	<nav class="navbar navbar-expand-lg navbar-dark main-nav mb-0 justify-content-start justify-content-md-between">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
			<img src="./assets/images/icons/burger_icon.png" alt=""> <span class=""></span><!--navbar-toggler-icon-->
		</button>
		<!--<a href="#" class="secondary-menu-toggler"><i class="fas fa-bars"></i></a>-->
		<a class="navbar-brand" href="index.php">
			<img class="w-auto" src="assets/images/logos/logo-white.png" alt="earth.com logo">
		</a>
		<span class="page-title text-uppercase">
			<?php echo $title; ?>
		</span>
		<div class="collapse navbar-collapse collapse" id="navbarsExample04">
			<ul class="navbar-nav mx-auto">
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
		</div>
		<div class="actions">
			<!-- Search bar -->
			<form class="search">
				<!--<input type="text" class="search-box" name="search-box" id="search-box" placeholder="Search this site...">-->
				<label for="search-box" class="search-box-label">
					<span class="search-icon">Search</span>
				</label>
				<span class="search-close">
             <i class="search-close-icon">Close</i>
             </span>
			</form>
			<!-- Subscribe button -->
			<a href="#" class="btn btn-outline-primary btn-subscribe d-none d-md-block">SUBSCRIBE</a>
		</div>
	</nav>
</section>

<!-- Header Add -->
<section id="main-add" class="main-add">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
				HEADER AD
			</div>
		</div>
	</div>
</section>
<!-- END Header Add -->

<!-- BreadCrumbs -->
<section id="breadcrumbs">
	<div class="container">
		<div class="breadcrumbs">
			<div class="col-xs-12">
				<a href="index.php"><i class="fas fa-globe"></i></a> / <a href="news.php">News </a>
			</div>
		</div>
	</div>
</section>
<!-- END BreadCrumbs -->