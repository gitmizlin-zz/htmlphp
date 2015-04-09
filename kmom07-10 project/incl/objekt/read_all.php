<?php
//
// Connect to the database
//
$db = new PDO("sqlite:$dbPath");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script

//
// Read from database
//
$stmt = $db->prepare('SELECT * FROM Object;');
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

  <?php foreach($res as $obj): ?>
<div class="article_wrapper_1">
  <article class="object">
    <p class="object_title"><?php echo $obj['title']; ?></p>
    <p class="small"><?php echo "Kategori: " . $obj['category']; ?></p>
    <p class="object_img"><img alt="object_image" src="<?php echo $obj['image']; ?>"></p>
<!--     <?php print_r($obj['image']); ?> output the content of the variable-->

    <p class="small"><?php echo $obj['text']; ?></p>
    <p class="small"><?php echo "Ägare: " . $obj['owner']; ?></p>
  </article>
</div>
  <?php endforeach; ?>


