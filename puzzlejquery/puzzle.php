<?php
function random($array){
	for ($i = 1; $i <= 16; $i++) {
		if($array[$i]==16){
			$hueco = $i;
		}
	}
	switch ($hueco) {
		case 1: $num = rand(0,1);
		if($num==0){
			$cambio=2;
		}else{
			$cambio=5;
		}
		break;
		case 2: $num = rand(0,2);
		if($num==0){
			$cambio=1;
		}elseif($num==1){
			$cambio=3;
		}else{
			$cambio=6;
		}
		break;
		case 3: $num = rand(0,2);
		if($num==0){
			$cambio=2;
		}elseif($num==1){
			$cambio=4;
		}else{
			$cambio=7;
		}
		break;
		case 4: $num = rand(0,1);
		if($num==0){
			$cambio=3;
		}else{
			$cambio=8;
		}
		break;	
		case 5: $num = rand(0,2);
		if($num==0){
			$cambio=1;
		}elseif($num==1){
			$cambio=6;
		}else{
			$cambio=9;
		}
		break;
		case 6: $num = rand(0,3);
		if($num==0){
			$cambio=2;
		}elseif($num==1){
			$cambio=5;
		}elseif($num==2){
			$cambio=7;
		}else{
			$cambio=10;
		}
		break;
		case 7: $num = rand(0,3);
		if($num==0){
			$cambio=3;
		}elseif($num==1){
			$cambio=6;
		}elseif($num==2){
			$cambio=8;
		}else{
			$cambio=11;
		}
		break;
		case 8: $num = rand(0,2);
		if($num==0){
			$cambio=4;
		}elseif($num==1){
			$cambio=7;
		}else{
			$cambio=12;
		}
		break;
		case 9: $num = rand(0,2);
		if($num==0){
			$cambio=5;
		}elseif($num==1){
			$cambio=10;
		}else{
			$cambio=13;
		}
		break;
		case 10: $num = rand(0,3);
		if($num==0){
			$cambio=6;
		}elseif($num==1){
			$cambio=9;
		}elseif($num==2){
			$cambio=11;
		}else{
			$cambio=14;
		}
		break;
		case 11: $num = rand(0,3);
		if($num==0){
			$cambio=7;
		}elseif($num==1){
			$cambio=10;
		}elseif($num==2){
			$cambio=12;
		}else{
			$cambio=15;
		}
		break;
		case 12: $num = rand(0,2);
		if($num==0){
			$cambio=8;
		}elseif($num==1){
			$cambio=11;
		}elseif($num==2){
			$cambio=13;
		}else{
			$cambio=16;
		}
		break;
		case 13: $num = rand(0,1);
		if($num==0){
			$cambio=9;
		}else{
			$cambio=14;
		}
		break;
		case 14: $num = rand(0,2);
		if($num==0){
			$cambio=10;
		}elseif($num==1){
			$cambio=13;
		}else{
			$cambio=15;
		}
		break;
		case 15: $num = rand(0,2);
		if($num==0){
			$cambio=11;
		}elseif($num==1){
			$cambio=14;
		}else{
			$cambio=16;
		}
		break;
		case 16: $num = rand(0,1);
		if($num==0){
			$cambio=12;
		}else{
			$cambio=15;
		}
		break;
	}
	$temp = $array[$hueco];
	$array[$hueco] = $array[$cambio];
	$array[$cambio] = $temp;
	return $array;
}
function mezclar(){
	$array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16);
	for ($i = 0; $i < 1000; $i++) {
		$array = random($array);
	}
	return $array;
}
	$array= mezclar();

	echo' <html>
	<head>
	<script src="jquery/jquery.min.js"></script>
	</head>
	<body>
	<table><tbody>
	<tr><td><img id="1" src="'.$array[1].'.png"></td>
	<td><img id="2" src="'.$array[2].'.png"></td>
	<td><img id="3" src="'.$array[3].'.png"></td>
	<td><img id="4" src="'.$array[4].'.png"></td></tr>
	<tr><td><img id="5" src="'.$array[5].'.png"></td>
	<td><img id="6" src="'.$array[6].'.png"></td>
	<td><img id="7" src="'.$array[7].'.png"></td>
	<td><img id="8"src="'.$array[8].'.png"></td></tr>
	<tr><td><img id="9" src="'.$array[9].'.png"></td>
	<td><img id="10" src="'.$array[10].'.png"></td>
	<td><img id="11" src="'.$array[11].'.png"></td>
	<td><img id="12" src="'.$array[12].'.png"></td></tr>
	<tr><td><img id="13" src="'.$array[13].'.png"></td>
	<td><img id="14" src="'.$array[14].'.png"></td>
	<td><img id="15" src="'.$array[15].'.png"></td>
	<td><img id="16" src="'.$array[16].'.png"></td></tr>
	</tbody></table>
	<p id="gz" > </p>
	<script src="puzzle.js"></script>
	</body>
	</html>';

?>
