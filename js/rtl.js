var moving_santa=document.getElementById("moving_santa")
left=window.innerWidth-moving_santa.width
function start(){
	if(left>0){
		moving_santa.style.left=(left-20)+"px"
		left-=20
	}
	else{
		left=window.innerWidth-moving_santa.width
	}
}

function move(){
	setInterval("start()",parseFloat(rtl_php_vars.rtlSpeed))
}
move();