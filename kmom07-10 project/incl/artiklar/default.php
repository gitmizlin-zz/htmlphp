<!-- Sidans/Dokumentets huvudsakliga innehåll -->
<h1>BOM Artiklar</h1>

<?php if (!isset($_POST['all-articles'])): ?>
<form method="post">
    <input type="submit" class="button" name="all-articles" value="Visa alla artiklar" />
</form>
<?php endif; ?>

<?php
    if (isset($_POST['all-articles'])) {
    	include("read_all.php");
    }
?>
