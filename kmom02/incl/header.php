<!DOCTYPE html>
<html>

<head>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="style/stylesheet.css" title="General stylesheet">
  <link rel="alternate stylesheet" href="style/debug.css" title="Debug stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico">

<!-- Each page can set $pageStyle to create additional style -->
  <?php if(isset($pageStyle)) : ?>
   <style type="text/css">
     <?php echo $pageStyle; ?>
   </style>
  <?php endif; ?>

</head>

<!-- The body id helps with highlighting current menu choice -->
<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>
  
  <!-- Header -->

  <!-- Above header --> 
    <header id="above">   
    <!-- Relateted links --> 
      <nav class="related"> 
      <a href="../kmom01/me.php">kmom01</a> 
      <a href="../kmom02/me.php">kmom02</a> 
      </nav> 
    </header>

<!-- Top header with logo and navigation -->
    <header id="top"> 
      <a href="me.php"><img src="img/logo.png" alt="htmlphp logo" width=300 height=70></a>
 
<!-- Navigation menu --> 
	<nav class="navmenu">
	 <a id="me-"     href="me.php">Me</a> |
	 <a id="report-" href="report.php">Redovisning</a> |
	 <a id="source-" href="viewsource.php">Källkod</a>
	</nav>
    </header>
