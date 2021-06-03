

<h1>Add a music</h1>


	<p class="ui message positive"></p>
<form method="post" class="ui form" action = "traitement/testUpload.php" enctype="multipart/form-data">
<div class="three wide fields">
	<div class="field">
		<label for="chanteur">By :</label><input type="text" name ='chanteur' class="chanteur">
	</div>
	<div class="field">
		<label for="titre">titre :</label>
		<input type="text" name ='titre' class="titre"> 
	</div>
<div class="field">
		<label for="langue">langue  :</label>
		<input type="text" name ='langue' class="langue"> 
</div>
</div>

<div class="field">
		<!-- <label for="">Audio</label> -->
		<input type="file" name ='audio' id="audio" class="audio" style="display: none;"> 
<label for="audio" id="label" class="ui button primary">
	<i class="upload green icon large"></i>
</label>
</div>

		<div class="field">
			<input type="submit" name="action" value="ajouter de music" class="ui button fluid primary">

		</div>

</form>
<script type="text/javascript" src="public/js/addMusic.js">
	
</script>