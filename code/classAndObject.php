<?php
class human{
	public $name;
	public $skinColor;
	public $language;

	public function introduce(){
		echo 'My name is '.$this->name.',my skin color is '.$this->skinColor.',my language is '.$this->language."\n\n";
	}
}

$xiaoming = new human();
$xiaoming->name = 'xiaoming';
$xiaoming->skinColor = 'yellow';
$xiaoming->language = 'Chinese';

$bob = new human();
$bob->name = 'bob';
$bob->skinColor = 'black';
$bob->language = 'English';

$xiaoming->introduce();
$bob->introduce();