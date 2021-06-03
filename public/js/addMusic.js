
	var rendu = document.querySelector('.message')
	var titre = document.querySelector('.titre')
	var chanteur = document.querySelector('.chanteur')
	var langue = document.querySelector('.langue')
	var audio = document.querySelector('.audio')

	
	rendu.style.display = "none"

	var xhr = new XMLHttpRequest()
	document.querySelector('input[type=submit]').addEventListener("click",(e)=>{
		e.preventDefault()



		xhr.open('POST','traitement/ajout.php',true)
		var data = new FormData(document.querySelector('form'))

	xhr.send(data)

	xhr.onreadystatechange = ()=>{
			if(xhr.readyState === 4){
		
		rendu.innerText = xhr.responseText
		rendu.style.display = "block"

				setTimeout(()=>{
					rendu.innerText = ""
		rendu.style.display = "none"

				},2000)
		titre.value = "";
		chanteur.value = "";
		langue.value = "";
		audio.value = "";
	}
			}


	})

