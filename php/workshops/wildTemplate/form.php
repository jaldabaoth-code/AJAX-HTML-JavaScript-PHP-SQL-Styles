<!DOCTYPE html>
<html>
	<head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.5/css/bulma.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="../assets/styles/navbar.css">
        <title>Wild Template</title>
	</head>
	<?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
	<body>
		<?php include "_header.php"; ?>
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
		<?php include "_footer.php"; ?>
	</body>
</html>
