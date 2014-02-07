<?php

class Header{
private $head = "<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<link rel='stylesheet' type='text/css' href='http://dev.sumanpoudel.com/css/style.css'>
<title> suman </title>
</head>";

public function getHeader(){
$head = $this->head;
return $head;
	}
}