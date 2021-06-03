	
<?php 
	
	session_start();



	if(!isset($_SESSION['status'],$_SESSION['user'])){

		$_SESSION['status'] = 'no_connected';
		$_SESSION['user'] = 'user';

}





	if(isset($_GET['page'])){

		$p = $_GET['page'];
	}else{
if($_SESSION['status'] == "no_connected"){
	$p = "connexion";
}else{

		$p = "home";
}
	}



	ob_start();
	if($p == "home" && $_SESSION['status'] == 'connected'){
		require "templates/home.php";
	}elseif ($p =="add" && $_SESSION['status'] == 'connected') {
	require "templates/add.php";

	}elseif ($p =="playlist" && $_SESSION['status'] == 'connected') {
	require "templates/playlist.php";

	}elseif ($p =="records" && $_SESSION['status'] == 'connected') {
	require "templates/stats.php";

	}elseif($p == "connexion"){

		require "templates/connexion.php";
	}elseif($p == "inscri"){

		require "templates/inscription.php";
	}else{
		require "templates/connexion.php";

	}

	$content = ob_get_clean();

	require "portion/header.php";
	
	require "templates/default.php";

	require "portion/footer.php";
 ?>



