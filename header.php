<?php 
ob_start();
session_start();
include 'baglan.php';
include 'fonksiyon.php';
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
	'id' => 0
	));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

$kanalsor=$db->prepare("SELECT * FROM kanallar where kanal_id=:id");
$kanalsor->execute(array(
  'id' => $_GET['kanal_id']
  ));
$hizmet = $_GET['kanal_id'];
$kanalcek=$kanalsor->fetch(PDO::FETCH_ASSOC);
$say=$kanalsor->rowCount();

 ?>
<!DOCTYPE html>
	<html lang="en">
		
<base href="<?php echo $ayarcek['ayar_url']; ?>">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<style type="text/css">
	.logo
{
width:233px;
height:58px;
}
</style>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
			<meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
			<meta name="keywords" content="<?php if($say==0){echo $ayarcek['ayar_keywords'];}echo $kanalcek['kanal_etiket'];?>">
			<title>
				<?php  if($say==0){echo $ayarcek['ayar_appname'].' - '.$ayarcek['ayar_tittle'];}
			 else {echo $kanalcek['kanal_ad'].' - ';} ?> <?php echo $ayarcek['ayar_title'] ?>
			 	
			 </title>			<!--BOOTSTRAP CSS-->
			<link href="css/bootstrap.css" rel="stylesheet">
			<!--BX SLIDER CSS-->
			<link rel="stylesheet" href="css/jquery.bxslider.css">
			<!--PRETTY PHOTO CSS-->
			<link href="css/prettyphoto.css" rel="stylesheet">
			<!--component CSS-->
			<link href="css/component.css" rel="stylesheet">
			<!--ICONS CSS-->
			<link href="css/font-awesome.css" rel="stylesheet">
			<!--THEME TYPO CSS-->
			<link href="css/themetypo.css" rel="stylesheet">
			<!--WIDGET CSS-->
			<link rel="stylesheet" href="css/widget.css">
			<!--CUSTOM STYLE CSS-->
			<link rel="stylesheet" href="style.css">
			<!--COLOR CSS-->
			<link rel="stylesheet" href="css/color.css">
			<!--RESPONCIVE CSS-->
			<link rel="stylesheet" href="css/responsive.css">
			<!--Favicon -->
            <link rel="icon" href="<?php echo $ayarcek['ayar_fovicon']; ?>">
            <script src="../../cdn.jsdelivr.net/npm/clappr%40latest/dist/clappr.min.js"></script>
            <script src="../../platform-api.sharethis.com/js/sharethis.js#property=5b6c45adebe0de00116c8426&product=unknown"></script>
		</head>
		<body class="kode-football">
			<!--// Wrapper //-->
			<div class="kode-wrapper">
				<!--// Header //-->
				<header class="football">
				    
				    <div class="logo-wrap2" style="padding-top: 60px ;">
					  <div class="container">
						<div class="logo logo-3">
						  <a href="index.php"><img class="logo" src="<?php echo $ayarcek['ayar_logo']; ?>" alt=""></a>
						</div>
					  </div>
					</div>
						
				</header>