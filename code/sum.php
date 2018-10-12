<?php
	// $a = 0;
	// $sum = 0;
	// while($a <= 100){
	// 	$sum += $a++;
	// }

	for($i = 0,$sum = 0;$i <= 100;$i ++){
		$sum += $i;
	}

	echo '1~100的和是：'.$sum;