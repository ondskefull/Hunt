<?php
// Load JSON data from file
$json_data = file_get_contents('data.json');

$php_data = json_decode($json_data, true);
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/Mall1.css">
</head>
<header >

	<div class="header">
		<a href="index.php"><img src="images/hunt_logo.jpg" alt="Test image for hunt" height="200" width="500"></a>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item <?php if($page == 'traits') { echo 'active'; } ?>">
					<a class="nav-link" href="index.php"><img src="images/home3.png" alt="Home button" height="25" width="25">Traits<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item <?php if($page == 'unlock-tree') { echo 'active'; } ?>">
					<a class="nav-link" href="unlock-tree.php"><img src="images/tree-icon.png" alt="Weapon tree" height="25" width="25">Unlock tree</a>
				</li>
				<li class="nav-item <?php if($page == 'bloodline') { echo 'active'; } ?>">
					<a class="nav-link" href="Bloodline.php"><img src="images/OIP.jpg" height="25" width="25">Bloodline</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="https://github.com/ondskefull/Hunt/issues" target="_blank">Report issues</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="application/javascript" src="scripts/scripts.js"></script>