<?php

class Layout{
	private $layout = '<body class="body">
<div class="earth"><img src="http://dev.sumanpoudel.com/img/e.png" alt="earth"></div>
<header>
   <img src="http://dev.sumanpoudel.com/img/my-image.jpg" alt="no image" class="logo">
</header>
<nav class="mainNav">
<input type="button" value="MENU" class="mobilebtn" />
<ul class="menu">
<li><a href="/">Home</a></li>
<li><a href="Aboutme">About me</a></li>
<li><a href="Education">Education</a></li>
<li><a href="Resume">Resume</a></li>
<li><a href="Contact">Contact</a></li>
<li><a href="Designed_Websites">Designed Websites</a></li>
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