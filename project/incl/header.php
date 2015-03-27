<!DOCTYPE html>
<html lang="sv">

<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>
<head>
  <meta charset="utf-8">
  <title><?php echo $pageTitle; ?></title>

<!-- favicon bild -->
   <link rel="shortcut icon" href="img/bom_favicon.png">
   <link rel="stylesheet" href="style/stylesheet.css" title="stylesheet">
</head>

<!-- The body id helps with highlighting current menu choice -->
<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>

<!-- Header med logga och navigareing -->
  <header id="top">
   <a href="index.php"><img src="img/top_img.png" alt="top image" id="top_img"></a>

   <!-- login & logout menu -->
   <div id="loginmenu"><?php echo userLoginMenu(); ?></div>

   <!-- Navigeringsmeny -->
  <div id="nav">
    <ul class="navmenu">
    <li id="nav1"><a id="startsida-" href="index.php">hem</a></li>
    <li><a id="om_oss-" href="om_oss.php">om oss</a></li>
    <li><a id="artiklar-" href="artiklar.php">artiklar</a></li>
    <li><a id="objekt-" href="objekt.php">objekt</a></li>
   </ul>
 </div>
  </header>


