<?php 
include("incl/config.php");
$title = "Välj stylesheet";
$pageId = "style";


// Check if the url contains a querystring with a page-part.
$p = null;
if(isset($_GET["p"])) 
{
  $p = $_GET["p"];
}

// Is the page known?
$path = "incl/style";
$file = null;
switch($p) 
{
  case "choose-stylesheet":
  {
    $pageTitle   = "Välj Stylesheet";
    $file        = "choose_stylesheet.php";
  }
  break;
  
  case "choose-stylesheet-process":
  {
    include("$path/choose_stylesheet_process.php");
  }
  break;
  
  case "edit-stylesheet1":
  {
    $pageTitle   = "Editera Stylesheet (steg 1 av 4)";
    $file        = "edit_stylesheet1.php";
  }
  break;
  
  case "edit-stylesheet2":
  {
    $pageTitle   = "Editera Stylesheet (steg 2 av 4)";
    $file        = "edit_stylesheet2.php";
  }
  break;
  
  case "edit-stylesheet3":
  {
    $pageTitle   = "Editera Stylesheet (steg 3 av 4)";
    $file        = "edit_stylesheet3.php";
  }
  break;
  
  case "edit-stylesheet4":
  {
    $pageTitle   = "Editera Stylesheet (steg 4 av 4)";
    $file        = "edit_stylesheet4.php";
  }
  break;
  
  case "edit-stylesheet":
  {
    $pageTitle   = "Editera Stylesheet";
    $file        = "edit_stylesheet.php";
  }
  break;
  
  default:
  {
    $pageTitle   = "Välj style för webbplatsen.";
    $file        = "default.php";
  }
}


?>

<?php include("incl/header.php"); ?>
<div id="content">
  <aside id="aside_box" class="left" style="width:32%;">
    <?php include("$path/aside.php"); ?>
  </aside>
  <article id="stylepage_article" class="right border justify-para" style="width:67%;">
    <p class="quiet small">Källkod till denna sida, <code><?php echo "$path/$file"; ?></code>, <a href="viewsource.php?dir=<?php echo $path; ?>&amp;file=<?php echo $file; ?>#file">hittar du här</a>.</p>
    <?php include("$path/$file"); ?>
  </article>
</div>
<?php include("incl/footer.php"); ?>
