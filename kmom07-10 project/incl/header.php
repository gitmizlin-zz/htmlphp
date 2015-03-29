<!DOCTYPE html>
<html lang="sv">

<head>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <meta charset="utf-8">
  <title><?php echo $pageTitle; ?></title>
  <link rel="shortcut icon" href="img/favicon.ico">

<!-- links to external stylesheets -->
<?php if(isset($_SESSION['stylesheet'])): ?>
 <link rel="stylesheet" href="style/<?php echo $_SESSION['stylesheet']; ?>">
<?php else: ?>
 <link rel="stylesheet" href="style/stylesheet.css" title="General stylesheet">
 <link rel="alternate stylesheet" href="style/debug.css" title="Debug stylesheet">
<?php endif; ?>

<!-- Each page can set $pageStyle to create additional style -->
  <?php if(isset($pageStyle)) : ?>
   <style type="text/css">
     <?php echo $pageStyle; ?>
   </style>
  <?php endif; ?>

</head>

<!-- The body id helps with highlighting current menu choice -->
<body<?php if(isset($pageId)) echo " id='$pageId' "; ?>>

  <!-- Above header -->
    <header id="above">

    <!-- login & logout menu -->
    <?php echo userLoginMenu(); ?>

    <!-- Relateted links -->
      <nav class="related">
      <a href="../kmom01/me.php">kmom01</a>
      <a href="../kmom02/me.php">kmom02</a>
      <a href="../kmom03/me.php">kmom03</a>
      <a href="../kmom04/me.php">kmom04</a>
      <a href="../kmom05/me.php">kmom05</a>
      <a href="../kmom06/me.php">kmom06</a>
      </nav>
    </header>

<!-- Top header with logo and navigation -->
    <header id="top">
      <a href="index.php"><img src="img/logo.png" alt="htmlphp logo" width=300 height=70></a>

<!-- Main navigation menu -->
	<nav class="navmenu">
	 <a id="hem-"     href="index.php">Hem</a> |
   <a id="objekt-" href="objekt.php">Objekt</a> |
   <a id="artiklar-"   href="artiklar.php">Artiklar</a> |
   <a id="om-" href="om.php">Om oss</a>
  </nav>
    </header>
