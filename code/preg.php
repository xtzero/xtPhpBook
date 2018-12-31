<?php
$phone = $_GET['phone'];
$pregStr = "/1[3-8][0-9]{9}/i";
echo '要进行验证的手机号是：'.$phone.'<br/>';
if(preg_match($pregStr,$phone)){
	echo '验证通过';
}else{
	echo '验证不通过';
}