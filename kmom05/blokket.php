<?php 
include("incl/config.php");
$pageId = "blokket";
$title = "Blokketannons";

// Check if the url contains a querystring with a page-part.
$p = null;
if(isset($_GET["p"])) 
{
  $p = $_GET["p"];
}


// Is the page known?
$path = "incl/blokket";
$file = null;
switch($p) 
{
  case "init":
  {
    $pageTitle   = "Initiera annonserna";
    $file        = "init.php";
  }
  break;
  
  case "update":
  {
    $pageTitle   = "Visa och uppdatera annonser";
    $file        = "update.php";
  }
  break;
  
  case "create":
  {
    $pageTitle   = "Skapa ny annons";
    $file        = "create.php";
  }
  break;
  
  case "delete":
  {
    $pageTitle   = "Radera annons";
    $file        = "delete.php";
  }
  break;
  
  case "read":
  {
    $pageTitle   = "Visa annons";
    $file        = "read.php";
  }
  break;
  
  case "read-all":
  {
    $pageTitle   = "Visa alla annonser";
    $file        = "read_all.php";
  }
  break;
  
  default:
  {
    $pageTitle   = "Blokket, annonsplatsen";
    $file        = "default.php";
  }
}


?>


<?php include("incl/header.php"); ?>
<div id="content">
  <aside id="aside_box" class="left" style="width:32%;">
    <?php include("$path/aside.php"); ?>
  </aside>
  <article id="blokket_article" class="right border justify-para" style="width:67%;">
    <p class="quiet small">Källkod till denna sida, <code><?php echo "$path/$file"; ?></code>, <a href="viewsource.php?dir=<?php echo $path; ?>&amp;file=<?php echo $file; ?>#file">hittar du här</a>.</p>
    <?php include("$path/$file"); ?>
    <?php include("incl/byline.php"); ?>  
    <hr>
  </article>
</div>
<?php include("incl/footer.php"); ?>