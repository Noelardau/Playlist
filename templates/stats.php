<?php 
	require 'traitement/connect_db.php';
	
	$fives = $bdd->query('SELECT * FROM musics ORDER BY vote DESC LIMIT 0,5');


	$data = $fives->fetchAll();

	$n = 1;

 ?>

<?php if($data != []){ ?>

	<?php if(sizeof($data)>= 5): ?>
 <div class="ui blue header medium">Les 5 premiers</div>
 	<?php endif; ?>
 	<div class="ui list divided">
 		
 		<?php foreach($data as $music): ?>
 		<div class="item">
 			
 			<?= "<div class='ui blue header small'> $n)". $music['titre'] ."</div> <li>By : ". $music['chanteur'] ."</li><li>vote : " .$music['vote'] ."</li>"?>
<?php 
	$n = $n + 1;

 ?>
 <div class="ui horizontal divider">
 	
 		<audio src="<?= $music['src']; ?>" controls></audio>
 		</div>
 </div>

 		<?php endforeach; ?>	





 	</div>



<?php }else{?>

<div class="ui horizontal divider">Les 5 premiers musics s'afficheront ici et vous pourrez les ecouter</div>

<?php } ?>
