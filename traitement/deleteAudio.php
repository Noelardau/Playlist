<?php 
	require 'connect_db.php';

	if(isset($_POST['idMusic'])){

		$id = $_POST['idMusic'];

	$getSrc = $bdd->prepare('SELECT src FROM musics WHERE id = ?');
	$getSrc->execute([
		$id
	]);

	$srcToDel = $getSrc->fetch()['src'];
	$getSrc->closeCursor();


	$del = $bdd->prepare('DELETE FROM musics WHERE id = ?');

	$del->execute([

		$id

	]);

	$del->closeCursor();

	$delF = '..'.DIRECTORY_SEPARATOR.$srcToDel;

	if(file_exists($delF)){

		unlink($delF);

	}
	


	}