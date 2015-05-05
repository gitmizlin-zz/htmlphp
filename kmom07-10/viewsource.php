<?php

include("incl/config.php");

$pageTitle = "Visa källkod";
$pageId = "source";

$sourceBasedir=dirname(__FILE__);
$sourceNoEcho=true;
include("src/source.php");
$pageStyle=$sourceStyle;

include("incl/header.php"); 

?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->
<div id="content">
<h1>
<?php echo $pageTitle; ?>
</h1>

<?php echo "$sourceBody"; ?>

</div> <!-- end of content div -->

<?php 
include("incl/footer.php"); 
?>

