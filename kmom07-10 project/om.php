<?php
	include("incl/config.php");

	$pageTitle = "Om Begravningsmuseum Online";
	$pageId = "om oss";

	include("incl/header.php");
?>

<!-- Sidans/Dokumentets huvudsakliga innehåll -->


<?php

// Path to the SQLite database file
$dbPath = dirname(__FILE__) . "/incl/artiklar/data/bmo.sqlite";

//
// Connect to the database
//
$db = new PDO("sqlite:$dbPath");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script
//
// Create a select/option-list of the categories
//
$stmt = $db->prepare('SELECT * FROM Article WHERE category="about";');
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($res)
?>

		<div id="presentation">

			<h1>
				<?php
					echo $pageTitle;
				?>
			</h1>
			<article id="om_oss">
				<?php foreach($res as $about): ?>

	            <?php echo $about['title']; ?>
	            <?php echo $about['content']; ?>

                <?php endforeach; ?>
            </article>

		</div> <!-- end of presentaion div -->

	<?php
		include("incl/footer.php");
	?>
