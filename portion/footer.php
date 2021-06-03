<div class="ui horizontal divider">
	
	
<?php if($_SESSION['status'] != 'connected') {?>
		
		<?php if($page == 'connexion'){  ?>
	<a href="index.php?page=inscri"><button class="ui button medium primary  ">créer un nouveau compte ?
		<?php }else{ ?>
	<a href="index.php?page=connexion"><button class="ui button medium primary  ">se connecter ?

	<?php } ?>

</button>
	</a>



	

<?php } ?>		


<footer>&copy;2021</footer>
</div>
</body>
</html>