<?php
include("incl/config.php");
$pageId = "objekt";

// Path to the SQLite database file
$dbPath = dirname(__FILE__) . "/incl/objekt/data/bmo.sqlite";

// Check if the url contains a querystring with a page-part.
$p = null;
if(isset($_GET["p"]))
{
  $p = $_GET["p"];
}


// Is the page known?
$path = "incl/objekt";
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
    $pageTitle   = "Museiobjekt";
    $file        = "read.php";
  }
  break;

  case "read_category":
  {
    $pageTitle   = "Objekt efter kategori";
    $file        = "read_category.php";
  }
  break;

  case "read-all":
  {
    $pageTitle   = "Alla objekt";
    $file        = "read_all.php";
  }
  break;

  default:
  {
    $pageTitle   = "Museiobjekt";
    $file        = "default.php";
  }
}

?>

<?php include("incl/header.php"); ?>
<div id="content">
  <aside id="aside_box" class="left" style="width:20%;">
    <?php include("$path/aside.php"); ?>
  </aside>
  <article id="objekt_article" style="width:79%;">

  <h1>Museiobjekt</h1>

    <?php include("$path/$file"); ?>
  </article>
</div>
<?php include("incl/footer.php"); ?>
