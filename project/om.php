<?php
	include("incl/config.php");

	$pageTitle = "Om Begravningsmuseum Online";
	$pageId = "om";

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
// print_r($res)
?>

		<div id="content">

			<h1>
				<?php
					echo $pageTitle;
				?>
			</h1>
			<?php foreach($res as $about): ?>
			<article id="om_oss">
	            <h2><?php echo $about['title']; ?></h2>
	            <?php echo $about['content']; ?>
	        </article>
            <?php endforeach; ?>

		</div> <!-- end of presentaion div -->

	<?php
		include("incl/footer.php");
	?>
