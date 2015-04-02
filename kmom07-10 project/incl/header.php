<?php

function isActivePage($page) {
  global $pageId;

  return $pageId === $page;
}

?>

<!DOCTYPE html>
<html lang="sv">

<head>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <meta charset="utf-8">
  <title><?php echo $pageTitle; ?></title>
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" href="style/stylesheet.css" title="General stylesheet">
</head>

<!-- The body id helps with highlighting current menu choice -->
<body>

  <!-- Above header -->
  <header id="above">

  <!-- login & logout menu -->
  <?php echo userLoginMenu(); ?>

  </header>

  <!-- Top header with logo and navigation -->
  <header id="top">
    <a href="index.php"><img src="img/logo.png" alt="htmlphp logo" width=300 height=70></a>

    <!-- Main navigation menu -->
  	<nav class="navmenu">
      <a class="<?php echo isActivePage('hem') ? 'active' : ''; ?>" href="index.php">Hem</a> |
      <a class="<?php echo isActivePage('objekt') ? 'active' : ''; ?>" href="objekt.php">Objekt</a> |
      <a class="<?php echo isActivePage('artiklar') ? 'active' : ''; ?>"   href="artiklar.php">Artiklar</a> |
      <a class="<?php echo isActivePage('om') ? 'active' : ''; ?>" href="om.php">Om oss</a>
    </nav>
  </header>
