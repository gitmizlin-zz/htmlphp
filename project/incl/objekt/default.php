<!-- Sidans/Dokumentets huvudsakliga innehåll -->

<?php if (!isset($_POST['all-objects'])): ?>
<form id="aa" method="post">
    <input type="image" src="img/obj_all_button2.png" class="button" name="all-objects" value="Visa alla objekt" />
</form>

<?php endif; ?>

<?php
    if (isset($_POST['all-objects'])) {
    	include("read_all.php");
    }
?>
