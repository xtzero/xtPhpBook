<?php
$arr = array('week up','wash face','go out','work','back home','sleep');
echo "you will do following things tomorrow:\n";
foreach($arr as $k => $v){
	echo $k.':'.$v."\n";
}

echo "finish!\n";