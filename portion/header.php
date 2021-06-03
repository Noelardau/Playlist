<?php 
	$page = $_GET['page'] ?? 'connexion';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="public/semantics/semantic.min.css">
	<link rel="stylesheet" href="public/css/style.css">
	<link rel="icon" type="image/jpg" href="public/test.jpg">
</head>
<body>

			
<?php if( $_SESSION['status'] == "connected"){ ?>

		<div class="ui menu blue">
	<a href="index.php?page=home" class="item <?php if($page == 'home'): ?>active <?php endif; ?>">Home</a>
	<?php if($_SESSION['user'] == 'admin'): ?>
		<a href="index.php?page=add" class="item <?php if($page == 'add'): ?>active <?php endif; ?>">add Music</a>

	<?php endif; ?>
	<a href="index.php?page=playlist" class="item <?php if($page == 'playlist'): ?>active <?php endif; ?>">playlist</a>
	<a href="index.php?page=records" class="item <?php if($page == 'records'): ?>active <?php endif; ?>">records</a>

	<a href="traitement/deconnexion.php" class="right item fluid">
	
	<i class="log out icon blue" title='Déconnexion'></i>
</a>
		</div>
<?php }else{ ?>

	<div class="ui menu">
		<div class="blue item fluid"><strong>Playlist</strong></div>
	</div>

<?php } ?>


		