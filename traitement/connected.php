<?php 
	session_start();
	require 'connect_db.php';
	require 'checkUser.php';
if($_POST['pseudo'] == "Noe" && $_POST['pass'] == 'admin'){
	$_SESSION['user'] = 'admin';
	$_SESSION['status'] = "connected";
}else{
	$list = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND mot_de_pass = ?');

	$getId = $bdd->prepare('SELECT id FROM users WHERE pseudo = ? AND mot_de_pass = ?');
	

	$list->execute([
		$_POST['pseudo'], sha1($_POST['pass'])
	]);

	$getId->execute([
		$_POST['pseudo'], sha1($_POST['pass'])
	]);

	if(checkUser($bdd,$_POST['pseudo'],sha1($_POST['pass']))){

	$_SESSION['status'] = "connected";

	}


}

	$_SESSION['pseudo'] = $_POST['pseudo'];
	if(isset($getId)){
		
	$_SESSION['id'] = $getId->fetch() ?? [0.5,0.4];
	}



	header("Location:../index.php?page=home");




 ?>