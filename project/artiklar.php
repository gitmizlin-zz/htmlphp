<?php
include("incl/config.php");
?>
<?php
$pageId = "artiklar";

// Check if the url contains a querystring with a page-part.
$p = null;
if(isset($_GET["p"]))
{
  $p = $_GET["p"];
}

// Is the page known?
$path = "incl/artiklar";
$file = null;

if ($p == "article-delete")
{
  $pageTitle   = "Redera artikel";
  $file        = "delete.php";
}
else if ($p == "read-all")
{
  $pageTitle   = "Alla artiklar om BOM";
  $file        = "read_all.php";
}
else if ($p == "read")
{
  $pageTitle   = "Välj artikel";
  $file        = "read.php";
}
else
{
  $pageTitle   = "Artiklar";
  $file        = "default.php";
}
?>

<?php include("incl/header.php"); ?>
<div id="content">
  <aside id="aside_box" class="left" style="width:20%;">
    <?php include("$path/aside.php"); ?>
  </aside>
  <article id="testpage_article" class="right border justify-para" style="width:79%;">

    <h1>Artiklar om BMO</h1>

    <?php include("$path/$file"); ?>
  </article>
</div> <!-- end of content div -->

<?php include("incl/footer.php"); ?>
