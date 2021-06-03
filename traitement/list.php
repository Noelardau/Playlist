<?php 
	require "connect_db.php";

	$req = $bdd->query('SELECT * FROM musics ORDER BY id DESC');

	$datas = $req->fetchAll(PDO::FETCH_ASSOC);




 ?>