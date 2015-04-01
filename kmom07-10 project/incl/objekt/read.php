<?php
//
// Connect to the database
//
$db = new PDO("sqlite:$dbPath");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script


//
// Create a select/option-list of the objects
//
$stmt = $db->prepare('SELECT * FROM Object;');
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
$current = null;

$select = "<select id='input1' name='objekt' onchange='form.submit();'>";
$select .= "<option value='-1'>Välj objekt</option>";
foreach($res as $obj) {
  $selected = "";
  if(isset($_POST['objekt']) && $_POST['objekt'] == $obj['id']) {
    $selected = "selected";
    $current = $obj;
  }
  $select .= "<option value='{$obj['id']}' {$selected}>{$obj['title']}</option>";
}
$select .= "</select>";


?>

<h1>Museiobjekt</h1>

<p>Följande objekt ingår i vår samling:</p>

<form method="post">
  <fieldset>
    <p>
      <label for="input1">Bläddra bland objekt nedan.</label><br>
      <?php echo $select; ?>
    </p>

  <?php if(isset($current)): ?>
    <p class="text_center">
      <div style="background:#eee; border:1px solid #999;padding:1em;">
        <h2><?php echo $current['title']; ?></h2>
        <img src="<?php echo $current['image']; ?>" class="left">
        <p><?php echo $current['text']; ?></p>
        <p><?php echo "Kategori: " . $current['category']; ?></p>
        <p><?php echo "Ägare: " . $current['owner']; ?></p>
      </div>
    </p>
  <?php endif; ?>

  </fieldset>
</form>
