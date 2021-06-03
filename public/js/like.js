var grid = $('.grid')
var id_user = $('span.usr');

$('span').css({
	opacity:"0"
})
grid.on('click','button',function()
{

	// console.log() 
	// return false

	var strong = $(this).find('strong').html()
	var nb = parseInt(strong)

	var id_user = $('.id_user').html()


	var id_music = $(this).parent().parent().find('span.id_music').html()

	if($(this).hasClass('up_like')){
			// on ajoute le nombre de like 

			nb += 1
			$(this).removeClass('up_like').addClass('down_like')
			$(this).html(`
				<div class="ui facebook button">
					<i class="thumbs up blue icon"></i>
				</div>
				<a class="ui basic label left pointing blue">
					<strong class="nb">${nb}</strong>
				</a>



				`)

		// traitement en php






		}else{







			nb -= 1;
			$(this).removeClass('down_like').addClass('up_like')
	$(this).html(`
					<div class="ui facebook button">
				<i class="thumbs up icon"></i>
				</div>
				<a class="ui basic blue left pointing label">
					<strong class="nb">${nb}</strong>
				</a>
				`)
		
		}

$.post('traitement/like.php',{idUser:id_user,idMusic:id_music}
	,(data)=>{
		

		})




	})



// delete pour l'admin

grid.on('click','.delete',function (e) {
	var id_music = $(this).parent().parent().parent().find('.id_music').html()
	var row = $(this).parent().parent().parent()
	

	$.post('traitement/deleteAudio.php',{idMusic:id_music},(data)=>{

		row.hide(300)
	})


})

