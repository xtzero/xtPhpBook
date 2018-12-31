<?php
$arr = array(
	'code' => 0,
	'msg' => 'success',
	'data' => array(
		array(
			'classname' => 'chinese',
			'classtime' => '8:00',
			'classroom' => '501'
		),

		'what are you nongshalei?'
	)
);

$keys = array_keys($arr);
$values = array_values($arr);

var_dump($keys,$values);