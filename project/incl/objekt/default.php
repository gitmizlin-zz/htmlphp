<!-- Sidans/Dokumentets huvudsakliga innehåll -->

<?php if (!isset($_POST['all-objects'])): ?>
<form method="post">
    <input type="submit" name='all-objects' class="button" value="Visa alla objekt" />
</form>

<?php endif; ?>

<?php
    if (isset($_POST['all-objects'])) {
    	include("read_all.php");
    }
?>
