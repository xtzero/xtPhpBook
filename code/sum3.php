<?php
	$i = 0;
	$sum = 0;
	while(true){
		$sum += $i;
		if($i > 500 && $i % 3 == 0){
			break;
		}
		$i ++;
	}

	echo '遇到500之后的第3的倍数时自然数的总和是：'.$sum.'，这个3的倍数是：'.$i;