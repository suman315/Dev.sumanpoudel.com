<?php
function downloadResume(){
	$download = "<a href='http://dev.sumanpoudel.com/includes/CVcomp.docx' download='sumancv.docx'>
	<input type='button' value='Download my Resume in MS Word format' class='downloadbtn' /></a>
<a href='http://dev.sumanpoudel.com/includes/CVcomp.pdf' download='sumancv.pdf'>
	<input type='button' value='Download my Resume in PDF' class='downloadbtn' /></a>
	";
	echo $download;
}

function getResume(){
	$Resume = '<article class="resume">
<h1>Mr Suman POUDEL</h1>

Address: 85 Victoria Road, Farnborough, GU14 7PP <br>
Email: suman.poudel2227@gmail.com or contact@sumanpoudel.com<br>
Website: www.sumanpoudel.com<br>
Mobile: 07443591315<br>
<h2>QUALIFICATIONS</h2>
<ul id="qualification">
	<li>2013 September- 2014 January: Site-Builder Contractor at WMG Limited, 138 South Street, Dorking, Surrey RH4 2EU. <br>
Working with HTML5, CSS3, >PHP5, JavaScript, JQuery, AJAX, MySQL, WordPress, Joomla to WordPress migration, Dreamweaver, Photoshop, FTP, OOP 
</li>
<li>2013 March: 1 month website designing and Photoshop training in CSE, Chitwan, Nepal</li>
<li>2010: Higher Nation Diploma in Software Development (Edexcel Level-5 BTEC), Queensland College, London, UK<br>
  Subjects Completed: Computer platforms H1, System analysis H2, Programming concepts H1, Database design concepts H1, Networking concepts H1, Visual programming using Visual basic H2, Website design H1, OOP programming H1, Personal skills development H1, Software development project H2, Data analysis and design H2, Project management H2, Java programming H1, Formal methods H2, Visual programming development H2, Quality system H2  
<br>Grade = Completed
</li>
<li>2006: A Level in Science, NIST College, Kathmandu, Nepal<br>
Subject Completed: Physics, Chemistry, Biology, Mathematics, English<br>
Grade = First
</li>
</ul>
<h2>SKILLS</h2>
<ul id="skills">
<li>Web designing using HTML5, CSS3, JavaScript, JQuery, AJAX, PHP, MySQL, NVU and Dreamweaver</li>
<li>Responsive Designs, CSS3 Animations </li>
<li>SQL database Design and Development</li>
<li>WordPress</li>
<li>Front end development </li>
<li>Visual basic and Visual studio</li>
<li>OOP concepts</li>
<li>Photoshop </li>
<li>GitHub(https://github.com/suman315), Zend-2, Composer, Virtual box</li>
<li>Microsoft windows, Microsoft office, Operating Systems, Windows 8</li>
<li>Passion for new technology</li>
<li>Languages: Fluent in English, Nepalese, Hindi and Basics in Spanish</li>
</ul>
<h2>DESIGNED AND LIVE WEBSITES</h2>
<ul>
<li><a href="/" target="_blank">www.sumanpoudel.com</li>
<li><a href="http://thecricketmagazine.com/" target="_blank">www.thecricketmagazine.com</li>
<li><a href="http://westminsterjournal.com/" target="_blank">www.westminsterjournal.com</li>
<li><a href="http://wealthandluxurymagazine.com/" target="_blank">www.wealthandluxurymagazine.com</li>
<li><a href="http://designmycoat.co.uk/" target="_blank">www.designmycoat.co.uk</li>
<li><a href="http://dev.sumanpoudel.com/" target="_blank">dev.sumanpoudel.com</li>
</ul>
<a href="https://github.com/suman315/My_CMS/" target="_blank"> <input type="button" value="Download Source codes from GitHub" class="downloadbtn" /> </a>

	</article>';
	echo $Resume;
}
