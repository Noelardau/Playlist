<?php 



	
	function checkUser($bdd,$pseudo,$mp)
	{
	$req = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? AND  mot_de_pass = ?');
	$req->execute([
		$pseudo, $mp
	]);

	if($req->rowCount() != 0){
		return true;
	}

	return false;

	}





 