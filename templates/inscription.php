<h1 class="ui huge header blue">Inscription</h1>
	<form action="traitement/inscri.php" method="post" class="ui form">
		<div class="ui segment">
		<div class="field">
			
		<label for="pass">pseudo :</label> <input type="text" name ="pseudo" required class='pseudo'>
		</div>

		<div class="field">
			<label for="pass1">mot de pass : </label><input type="password" name ="pass1" required class="pass1">
		</div>
		<div class="field">
			
		<label for="pass2">confirmer le mot de pass : </label><input type="password" name ="pass2" required class="pass2">
		</div>

	<input class="ui button primary fluid" type="submit" name="action" value="s'inscrire">


	</div>
	</form>
<p class="mess"></p>

	<script type="text/javascript" src="public/js/inscri.js"></script>

