<?php
// $file = fopen('notExist.txt','rw');
$filename = 'notExist.txt';
echo '发生异常之前<br/>';
if(file_exists($filename)){
	$file = fopen('','rw');
}else{
	echo '<script>alert("读取文件失败！")</script>';
	// die('读取文件失败！');
}

echo '异常之后<br/>';
