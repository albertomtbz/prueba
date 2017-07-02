$(document).ready(function(){
	$("img").click(function() { //Cada elemento <img> llamará a esta función cuando hagamos click sobre él.
	var id = $(this).attr("id");	
		switch(id) {	//Utilizamos un switch para comprobar si el movimiento está permitido. El id de cada imagen es el de la casilla que ocupa.
			case "1":
			if($("#2").attr("src")=="16.png"||$("#5").attr("src")=="16.png"){
				var permitido = true;
			}
			break;
			case "2":
			if($("#1").attr("src")=="16.png"||$("#3").attr("src")=="16.png"||$("#6").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "3":
			if($("#2").attr("src")=="16.png"||$("#4").attr("src")=="16.png"||$("#7").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "4":
			if($("#3").attr("src")=="16.png"||$("#8").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "5":
			if($("#1").attr("src")=="16.png"||$("#6").attr("src")=="16.png"||$("#9").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "6":
			if($("#2").attr("src")=="16.png"||$("#5").attr("src")=="16.png"||$("#7").attr("src")=="16.png"||$("#10").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "7":
			if($("#3").attr("src")=="16.png"||$("#6").attr("src")=="16.png"||$("#8").attr("src")=="16.png"||$("#11").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "8":
			if($("#4").attr("src")=="16.png"||$("#7").attr("src")=="16.png"||$("#12").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "9":
			if($("#5").attr("src")=="16.png"||$("#10").attr("src")=="16.png"||$("#13").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "10":
			if($("#6").attr("src")=="16.png"||$("#9").attr("src")=="16.png"||$("#11").attr("src")=="16.png"||$("#14").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "11":
			if($("#7").attr("src")=="16.png"||$("#10").attr("src")=="16.png"||$("#12").attr("src")=="16.png"||$("#15").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "12":
			if($("#8").attr("src")=="16.png"||$("#11").attr("src")=="16.png"||$("#16").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "13":
			if($("#9").attr("src")=="16.png"||$("#14").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "14":
			if($("#10").attr("src")=="16.png"||$("#13").attr("src")=="16.png"||$("#15").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "15":
			if($("#11").attr("src")=="16.png"||$("#14").attr("src")=="16.png"||$("#16").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			case "16":
			if($("#12").attr("src")=="16.png"||$("#15").attr("src")=="16.png"){
				var permitido = true;		
			}
			break;
			default:
				var permitido = false;
			break;
		}
		if(permitido){
			var hueco = $("[src='16.png']"); 	//Si el movimiento está permitido, 
			var old = $(this).attr("src"); 		//intercambiaremos el src de nuestra imagen por 
			hueco.attr("src", old);				//el de aquella imagen que tenga  el src "16.png", es decir, el hueco en blanco.
			$(this).attr("src", "16.png");
		}
			if($("#1").attr("src")=="1.png"&&$("#2").attr("src")=="2.png"&&$("#3").attr("src")=="3.png"&&$("#4").attr("src")=="4.png"&&$("#5").attr("src")=="5.png"&&$("#6").attr("src")=="6.png"&&$("#7").attr("src")=="7.png"&&$("#8").attr("src")=="8.png"&&$("#9").attr("src")=="9.png"&&$("#10").attr("src")=="10.png"&&$("#11").attr("src")=="11.png"&&$("#12").attr("src")=="12.png"&&$("#13").attr("src")=="13.png"&&$("#14").attr("src")=="14.png"&&$("#15").attr("src")=="15.png"&&$("#16").attr("src")=="16.png"){
			var gz = $("#gz"); //Comprobación de si el puzzle está resuelto ^
			gz.text("Has resuelto el puzzle. Enhorabuena.");
}
	});
 });
