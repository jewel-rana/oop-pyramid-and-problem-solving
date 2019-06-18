<?php
// Report runtime errors
ini_set("display_errors", "1");
error_reporting(E_ALL);

// for ($i = 0; $i <= 9; $i++){
// 	for($d = 10 - $i; $d > 0; $d--) {
// 		 echo " &nbsp;&nbsp; ";
// 	}

// 	for($j = 1; $j<=$i; $j++){
// 		echo " &nbsp;* &nbsp; ";
// 	}

// 	echo '<br />';
// }

// $m = 1;

// for( $i=1; $i <=5; $i++){
// 	for($j=$i; $j<=4; $j++){
// 		echo " &nbsp;&nbsp;";
// 	}

// 	for($k=1; $k<=$m; $k++){
// 		echo " * ";
// 	}

// 	for($c=$m; $c>1; $c--){
// 		echo " * ";
// 	}

// 	echo '<br/>';
// 	$m++;
// }
echo '<hr>';
for($m = 8; $m >=1; $m--){
	for($n = 8; $n >= $m; $n--){
		echo ' &nbsp; ';
	}

	for( $o = $m; $o >=1; $o--){
		echo ' 0 &nbsp;';
	}
	echo '<br />';
}
for($i = 0; $i <= 9; $i++){
	for($j = 9 - $i; $j > 0; $j--){
		echo ' &nbsp; ';
	}

	for( $k = 1; $k <= $i; $k++){
		echo ' 0 &nbsp;';
	}
	

	echo '<br>';
}
