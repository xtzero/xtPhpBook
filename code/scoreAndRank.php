<?php
	$rank = $_GET['rank'];
	// if($rank == 'A'){
	// 	echo '该同学的成绩区间是：100~80';
	// }else if($rank == 'B'){
	// 	echo '该同学的成绩区间是：79~60';
	// }else if($rank == 'C'){
	// 	echo '该同学的成绩区间是：59~40';
	// }else if($rank == 'D'){
	// 	echo '该同学的成绩区间是：39~20';
	// }else if($rank == 'E'){
	// 	echo '该同学的成绩区间是：19~0';
	// }else{
	// 	echo '输入的成绩等级不合法';
	// }
	switch($rank){
		case 'A' : echo '该同学的成绩区间是：100~80';break;
		case 'B' : echo '该同学的成绩区间是：79~60';break;
		case 'C' : echo '该同学的成绩区间是：59~40';break;
		case 'D' : echo '该同学的成绩区间是：39~20';break;
		case 'E' : echo '该同学的成绩区间是：19~0';break;
		default : echo '输入的成绩等级不合法';
	}