<?php 
	if(!isset($bdd)){

	require "connect_db.php";
	}


	$id_user = $_POST['idUser'];
	$id_music = $_POST['idMusic'];

	$req = $bdd->prepare('SELECT * FROM reaction WHERE id_music = ? AND id_user = ?');

	$req->execute([
		$id_music, $id_user
	]);
	

	
	if($req->rowCount() != 0){

		$del = $bdd->prepare('DELETE FROM reaction WHERE id_music = ? AND id_user = ?');
		$del->execute([
			$id_music, $id_user

		]);
		$del->closeCursor();

		$down = $bdd->prepare('UPDATE musics SET vote = vote - 1 WHERE id = ? ');

		$down->execute([
			$id_music
		]);


		

	}else{ 

		$add = $bdd->prepare('INSERT INTO reaction SET id_music = ? , id_user = ?');

		$add->execute([
		$id_music, $id_user
		]);
		$add->closeCursor();

		$up = $bdd->prepare('UPDATE musics SET vote = vote + 1 WHERE id = ?');
		$up->execute([
			$id_music
		]);

	}




 ?>