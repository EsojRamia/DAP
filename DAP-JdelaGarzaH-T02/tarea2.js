var imagen = new Image();
var juego;
var i = 0;

$("#jugar").click(function(){
	juego = true;
	$("#dado").show();
	var dado = ["dado1.png","dado2.png","dado3.png","dado4.png","dado5.png","dado6.png"];
	$("#d").html("<img src='"+dado[0]+"'>").show()

	setImg(true);

	function setImg(boolean){
		if(juego==true){
			var j = (Math.floor(Math.random()*6));
			i = j;
			imagen.onload=function(){
				$("#d img").attr("src", this.src)
			}
			imagen.src = dado[i];
			return setTimeout(setImg, 100);
		}
	}

	if(juego==false){
		$("#d").html("<img src='"+dado[i]+"'>").show()
	}

});

$("#detener").click(function(e){
	juego = false;
})


