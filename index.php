
<?php include_once("Header.php");
$header = new Header;
$top = $header->getHeader();
echo $top; ?>
<?php include("Layout.php");
$Layout = new Layout;
$layout = $Layout->getLayout();
echo $layout;
?>
<section class="content">
<?php if(empty($_GET['page'])){
 include_once("Home.php"); 
 getHomeContent(); 
}
elseif($_GET['page']==1){
	include_once("Aboutme.php");
	getAboutme();
}
elseif ($_GET['page']==2) {
	include_once("Education.php");
	getEducation();
}
elseif ($_GET['page']==3){
	include_once("Resume.php");
	downloadResume();
	getResume();
}
elseif ($_GET['page']==4) {
	include_once("Contact.php");
	displayForm();

}
elseif ($_GET['page']==5) {
	include_once("DesignedWebsite.php");
	getDesignedWebsite();
}
 else{
	 include_once("Home.php"); 
 getHomeContent(); 
}
 ?>
</section>
<?php echo $Layout->getFooter()  ?>
</body>
</html>