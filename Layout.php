<?php

class Layout{
	private $layout = '<body class="body">
<div class="earth"><img src="http://dev.sumanpoudel.com/img/e.png"></div>
<header>
   <img src="http://dev.sumanpoudel.com/img/my-image.jpg" alt="no image" class="logo">
</header>
<nav class="mainNav">
<ul>
<li><a href="/">Home</a></li>
<li><a href="?page=1">About me</a></li>
<li><a href="?page=2">Education</a></li>
<li><a href="?page=3">Resume</a></li>
<li><a href="?page=4">Contact</a></li>
<li><a href="?page=5">Designed Websites</a></li>
</ul>
</nav>';
private $footer = '<footer>
    &copy; suman poudel 2013-2014
</footer>';
public function getLayout(){
	return $this->layout;
}
public function getFooter(){
	return $this->footer;
}

}