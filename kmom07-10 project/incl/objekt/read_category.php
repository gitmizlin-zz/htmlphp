<?php
//
// Connect to the database
//
$db = new PDO("sqlite:$dbPath");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script
//
// Create a select/option-list of the categories
//
$stmt = $db->prepare('SELECT distinct category FROM Object;');
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
$current = null;
$select = "<select id='input1' name='kategori' onchange='form.submit();'>";
$select .= "<option value='-1'>Välj kategori</option>";
foreach($res as $category) {
  $category = $category['category'];
  $selected = "";
  if(isset($_POST['kategori']) && $_POST['kategori'] == $category) {
    $selected = "selected";
    $current = $category;
  }
  $select .= "<option value='$category' {$selected}>$category</option>";
}
$select .= "</select>";
?>

<form method="post">
  <fieldset>
    <p>
      <label for="input1">Bläddra bland kategorier nedan.</label><br>
      <?php echo $select; ?>
    </p>
  </fieldset>

<?php
if(isset($current)):

  $stmt = $db->prepare("SELECT * FROM Object WHERE category='$current'");
  $stmt->execute();
  $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>



<?php foreach($res as $current): ?>
<div class="article_wrapper_1">
  <article class="object">
      <p class="object_title"><?php echo $current['title']; ?></p>
      <p class="small"><?php echo "Kategori: " . $current['category']; ?></p>
      <p class="object_img"><img alt="object_image" src="<?php echo $current['image']; ?>"></p>
      <p class="small"><?php echo $current['text']; ?></p>
      <p class="small"><?php echo "Ägare: " . $current['owner']; ?></p>
  </article>
</div>
  <?php endforeach; ?>
  <?php endif; ?>

</form>




