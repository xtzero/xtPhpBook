<?php
$f = true;
flag:
echo '程序开始啦~<br/>';
echo '我也不知道接下来会发生什么。<br/>';
echo 'goto来啦！<br/>';
if($f){
	echo '回到开始！<br/>';
	$f = false;
	goto flag;
}else{
	echo '程序结束！<br/>如果不设置分支，程序会死循环。<br/>';
}
