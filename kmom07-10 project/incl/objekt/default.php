<!-- Sidans/Dokumentets huvudsakliga innehåll -->

<?php if (!isset($_POST['all-objects'])): ?>
<form method="post">
    <input type="submit" class="button" name="all-objects" value="Visa alla objekt" />
</form>
<?php endif; ?>

<?php
    if (isset($_POST['all-objects'])) {
    	include("read_all.php");
    }
?>
