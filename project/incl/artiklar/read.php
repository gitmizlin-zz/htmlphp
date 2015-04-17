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
$stmt = $db->prepare('SELECT * FROM Article WHERE category="article";');
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
$current = null;

$select = "<select id='input1' name='select_article' onchange='form.submit();'>";
$select .= "<option value='-1'>Välj artikel</option>";
foreach($res as $art) {
  $selected = "";
  if(isset($_POST['select_article']) && $_POST['select_article'] == $art['id']) {
    $selected = "selected";
    $current = $art;
  }
  $select .= "<option value='{$art['id']}' {$selected}>{$art['title']}</option>";
}
$select .= "</select>";

?>

<form method="post">
  <fieldset>
    <p>
      <label for="input1">Bläddra bland atriklar nedan.</label><br>
      <?php echo $select; ?>
    </p>

  <?php if(isset($current)): ?>
      <div class="article_wrapper_2">
        <h2><?php echo $current['title']; ?></h2>
        <p><?php echo $current['author'] . ", ".  $current['title'] . "</p><p class='small'>publicerad " . $current['pubdate']; ?></p>
        <p><?php echo $current['content']; ?></p>
      </div>
  <?php endif; ?>
  </fieldset>
</form>






