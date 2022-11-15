 const $ = document.querySelector.bind(document)
 const $$ = document.querySelectorAll.bind(document)


// Name
var eleName = $('#name')

const chuanHoa = () => {
	eleName.value = eleName.value.trim();
	var convertToArray = eleName.value.toLowerCase().split(' ');
	var result = convertToArray.map(function(val) {
    	return val.replace(val.charAt(0), val.charAt(0).toUpperCase());
  	})
	eleName.value = result.join(' ');
}
eleName.onblur = chuanHoa

// Date
var eleDate =  $("#birthday")
eleDate.onkeydown = () => {
 	if(eleDate.value.length == 2) {
 		eleDate.value = eleDate.value + '/'
 	}
 	if(eleDate.value.length == 5) {
 		eleDate.value = eleDate.value + '/'
 	}
}


// Email
var eleEmail = $("#email")

const check = function(value) {
	var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
	return regex.test(value)
}
eleEmail.onblur  = () => {
	var isCheck = check(eleEmail.value)
	if (isCheck) {
		eleEmail.style.color = 'black'
		eleEmail.style.border = 'none'
	}else{
		eleEmail.style.color = 'red'
		eleEmail.style.border = '3px solid red'
	}
}

// Pass
 
var elePass = $("#password")

var elePassOld = $("#passwordOld")

const checkPass = () => {
	if(elePass.value === elePassOld.value) {
		elePassOld.style.border = 'none'
		elePass.style.border = 'none'
	}else{
		elePassOld.style.border = '3px solid red'
		elePass.style.border = '3px solid red'
	}
}


elePassOld.onblur = checkPass
