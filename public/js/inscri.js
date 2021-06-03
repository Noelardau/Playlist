var form = document.querySelector('.form')
var btn = document.querySelector('input[type=submit]')
var input = document.querySelectorAll('input')
btn.addEventListener('click',function(e){
		e.preventDefault()

	var xhr = new XMLHttpRequest()

	xhr.open('POST','traitement/inscri.php',true)
	
	var data = new FormData(form)

	xhr.send(data)


	xhr.onreadystatechange = function() {
		if(xhr.readyState === 4){

	for(var i = 0; i<input.length; i++){
		if(input[i].type != 'submit'){
			
		input[i].value = ""
		}
	}
			alert(xhr.responseText)
		}

	}


})