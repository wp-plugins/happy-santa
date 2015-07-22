var moving_santa=document.getElementById("moving_santa")
left=0
function start(){
	if(left<=window.innerWidth-moving_santa.width){
		moving_santa.style.left=(left+20)+"px"
		left+=20
	}
	else{
		left=0
	}
}

function move(){
setInterval("start()",parseFloat(ltr_php_vars.ltrSpeed))
}
move();