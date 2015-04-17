<!-- Sidans/Dokumentets huvudsakliga innehåll -->
<?php if (!isset($_POST['all-articles'])): ?>
<form method="post">
    <input type="image" src="img/art_all_button.png" class="button" name="all-articles" value="Visa alla artiklar" />
</form>
<?php endif; ?>

<?php
    if (isset($_POST['all-articles'])) {
    	include("read_all.php");
    }
?>
