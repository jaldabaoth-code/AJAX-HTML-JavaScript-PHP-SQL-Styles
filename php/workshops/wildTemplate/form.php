<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="#">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.5/css/bulma.min.css"/>
		<link rel="stylesheet" href="../../../assets/styles/navbar.css">
		<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
        <title>Wild Template</title>
	</head>
    <?php
        /* Navbar included */
        include '../../../includes/navbar.php';
        include '../../includes/bottomNavbar.php';
    ?>
	<body>
		<?php include "includes/_header.php"; ?>
		<div class="container">
			<div class="column is-12">
				<section class="hero is-info is-bold is-small">
					<div class="hero-body">
						<div class="container">
							<h1 class="title">
								<?php
									echo "Hello " . $_GET['firstname'] . " " . $_GET['lastname'] . " from " . $_GET['campus'] . ", this is your message : ";
								?>
							</h1>
							<h2 class="subtitle"><?php echo $_GET['message']; ?></h2>
						</div>
					</div>
				</section>
			</div>
		</div>
		<?php include "includes/_footer.php"; ?>
	</body>
</html>
