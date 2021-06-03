<?php 

	require "traitement/list.php";

	$utilisateur = $_SESSION['user'];
	if(!isset($bdd)){
		
	require "connect_db.php";
	}

	if(isset($_SESSION['id'])){

	$id_user = $_SESSION['id'][0] ?? "";
	}



	



	
	
if($datas != []){
	

 ?>
 <h1 class="ui blue header">
<?php if($utilisateur == "user"){ ?>
Votez les musics que vous aimerez écouter
<?php }else{ ?>
	Les musics ajoutées
	<?php } ?>
	</h1>

<div class="ui equal width grid list">

<span class="id_user"><?= $id_user; ?></span>
<?php foreach ($datas as $music): ?>

	<div class="row item">
		<div class="ui basic label column">
		
		<?= $music['titre']." de ".$music['chanteur'];?>
			
	</div>

<?php if($utilisateur == "user"){ ?> <!-- on peut reagir si on est user -->
	
	<div class="column">

			<?php 
	
	$req = $bdd->prepare('SELECT * FROM reaction WHERE id_music = ? AND id_user = ?');
	$req->execute([
		$music['id'], $id_user
	]);
		if($req->rowCount() == 0){

			 ?>
			<button class="up_like  ui labeled button" tabindex = "0">
				<div class="ui facebook button">
					<i class="thumbs up icon"></i>
				</div>
				<a class="ui basic blue left pointing label">
					<strong class="nb"><?= $music['vote'] ?? "0"; ?></strong>
				</a>
			</button>
<?php }else{ ?>
			<button class="down_like ui button labeled">
				<div class="ui facebook button">
					<i class="thumbs up blue icon"></i>
				</div>
				<a class="ui basic label left pointing blue">
					<strong class="nb"><?= $music['vote'] ?? "0"; ?></strong>
				</a>

			</button>

<?php } ?>
	</div>	

		<?php }else{ ?>

<div class="column">
	
	<div class="ui label">
			<a class="ui basic label">
				<?= $music['vote'] ?? "0"; ?>
			</a>
		<div class="ui red button delete">
					
					<i class="trash icon"></i>
				</div>
	</div>

</div>

<?php } ?>			
<span class="id_music"><?= $music['id'];  ?></span>
	</div>
<?php endforeach; ?>	
</div>

<?php }else{ ?>


<div class="ui horizontal divider">La liste des musics s'afficheront ici et vous pourrez voter</div>

<?php } ?>


<script type="text/javascript" src="public/js/jquery.js"></script>

<script type="text/javascript" src="public/js/like.js">
</script>