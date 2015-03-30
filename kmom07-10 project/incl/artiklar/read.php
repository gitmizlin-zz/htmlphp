<?php
// Path to the SQLite database file
$dbPath = dirname(__FILE__) . "/data/bmo.sqlite";

//
// Connect to the database
//
$db = new PDO("sqlite:$dbPath");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script


//
// Create a select/option-list of the articles
//
$stmt = $db->prepare('SELECT * FROM Article;');
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
$current = null;

$select = "<select id='input1' name='article' onchange='form.submit();'>";
$select .= "<option value='-1'>Välj artikel</option>";
foreach($res as $ad) {
  $selected = "";
  if(isset($_POST['ads']) && $_POST['ads'] == $ad['id']) {
    $selected = "selected";
    $current = $ad;
  }
  $select .= "<option value='{$ad['id']}' {$selected}>{$ad['title']} ({$ad['id']})</option>";
}
$select .= "</select>";


?>

<h1>Artiklar om BMO</h1>

<p>Följande artiklar ingår i vår samling.</p>

<form method="post">
  <fieldset>
    <p>
      <label for="input1">Bläddra bland atriklar nedan.</label><br>
      <?php echo $select; ?>
    </p>

  <?php if(isset($current)): ?>
    <p>
      <div style="background:#eee; border:1px solid #999;padding:1em;">
        <h2><?php echo $current['title']; ?></h2>
        <img src="<?php echo $current['image']; ?>" class="left">
        <p><?php echo $current['description']; ?></p>
      </div>
    </p>
  <?php endif; ?>

  </fieldset>
</form>
