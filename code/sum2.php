<?php
	for($i = 1,$sum = 0;$i <= 1000;$i ++){
		if($i % 2 == 0){
			//两数相除，余数是0则为可以整除
			//一个数如果能被2整除，则这个数是偶数
			$sum += $i;
		}else{
			echo $i.'被跳过了。<br/>';
			continue;
		}
	}

	echo '自然数1~1000中，全部偶数的和是：'.$sum;