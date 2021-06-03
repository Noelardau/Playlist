<?php 

	require "connect_db.php";
	require "checkUser.php";

	$message = "inscription réussi, vous pouvez maintenant vous connectez";

	// $message = $_POST['pass1'];
	
	if(trim($_POST['pseudo'])!= null && trim($_POST['pass1'])!= null && trim($_POST['pass2'])!= null){
		
		$req = $bdd->prepare('INSERT INTO users SET pseudo = ?, mot_de_pass = ?');

	if($_POST['pass1'] == $_POST['pass2'] ){
		$ps = $_POST['pseudo'];
		$mp = sha1($_POST['pass1']);
		if(!checkUser($bdd,$ps,$mp)){

		$req->execute([

			$ps, $mp
		]);

		}else{

			$message = "identifiant deja prise";
		}


	}else{
		$message = "echec du verification de mot de pass";
	}	

}
echo $message;
