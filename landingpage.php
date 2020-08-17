<!DOCTYPE html>
<html>
<head>
	<title>Web-school</title>
	<link rel="stylesheet" type="text/css" href="bulma-0.9.0/css/bulma.css"></style>
</head>
<body>
	<section class="section">
		<div class="container">
			
	<div class="content">
		<?php 
			include 'navbar.php';
		 ?>
		 
		 <?php 
			include 'hero.php';
		 ?>
		 
		 <div class="has-text-info">
			<?php 
				include 'menu2.php';
			 ?>

			 <?php 
				include 'box.php';
			 ?>
		 </div>
		
		<?php 
		 include 'notification.php';
		 ?>

		 <?php 
		 include 'panel.php';
		 ?>

		 <?php 
		 include 'footer.php';
		 ?>
	</div>
		</div>
	</section>

</body>
</html>