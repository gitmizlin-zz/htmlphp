<!-- Sidans/Dokumentets huvudsakliga innehåll -->
<?php if (!isset($_POST['all-articles'])): ?>
<form method="post">
    <input type="submit" name="all-articles" class="button" value="Visa alla artiklar" />
</form>

<?php endif; ?>

<?php
    if (isset($_POST['all-articles'])) {
    	include("read_all.php");
    }
?>
