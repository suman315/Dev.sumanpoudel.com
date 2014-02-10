<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel='stylesheet' type='text/css' href='http://dev.sumanpoudel.com/css/style.css?ts=<?php echo time(); ?> ' >
<title> <?php if(isset($url)){ echo $url;}else{echo "Suman Poudel";} ?> </title>
</head>

<?php include("Layout.php");
$Layout = new Layout;
$layout = $Layout->getLayout();
echo $layout;
?>
<section class="content">
<?php 
if(preg_match('/^[A-Za-z-_]+$/', $_GET['url'])){
$url = $_GET['url'];

switch ($url) {
	case 'Aboutme':
					include_once("Aboutme.php");
					getAboutme();
					break;
	case 'Education':
					include_once("Education.php");
					getEducation();
					break;
	case 'Resume':
					include_once("Resume.php");
					downloadResume();
					getResume();
					break;
	case 'Contact':
					include_once("Contact.php");
					displayForm();
					break;
	case 'Designed_Websites':
					include_once("DesignedWebsite.php");
					getDesignedWebsite();
					break;

	default:
					include_once("Home.php"); 
					getHomeContent(); 
					break;
}


}
else{
	include_once("Home.php"); 
	getHomeContent(); 
}
 
 ?>

</section>
<?php echo $Layout->getFooter()  ?>
<script type="text/javascript" src="http://dev.sumanpoudel.com/css/javaScript.js"></script>
</body>

</html>