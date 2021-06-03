<?php 
	require "connect_db.php";
	require "checkUser.php";
	


// ajout de music par l'admin



	$req = $bdd->prepare('INSERT INTO musics SET titre = ? , chanteur=?, langue = ?, vote = 0, src = ?');

	if(isset($_POST['titre']) && isset($_POST['chanteur']) && isset($_POST['langue']) && isset($_FILES['audio']) && !empty($_POST['titre']) && !empty($_POST['chanteur']) && !empty($_POST['langue']) && !empty($_FILES['audio'])){

		$audio = $_FILES['audio'];
		$chanteur = $_POST['chanteur'];
		$titre = $_POST['titre'];
		
		$nameArray = explode(".", $audio['name']);
		$extension = $nameArray[sizeof($nameArray)-1];

		$newName = $titre ."-".$chanteur.".$extension";

		$newPath = "audios".DIRECTORY_SEPARATOR;

		$src = $newPath.$newName;

		if($extension == 'mp3'){

		if(move_uploaded_file($audio['tmp_name'], '../'.$src)){

		$req->execute([
			$_POST['titre'],
			$_POST['chanteur'],
			$_POST['langue'],
			$src
		]);

		}

		$message =  "enregistrement reussi";


		}else{
		$message =  "verifier que vous avez bien choisi le fichier avec l'extension mp3";

		}



	}else{
		$message =  "veuillez inserez les donnees";
	}


echo $message;


 ?>