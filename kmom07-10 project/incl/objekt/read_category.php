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

<h1>Museiobjekt</h1>

<p>Följande objekt ingår i vår samling:</p>

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

<table>
    <caption><em>caption</em></caption>
    <tr>
      <th>Titel:</th>
      <th>Bild:</th>
      <th>Beskrivning:</th>
    </tr>

    <?php foreach($res as $current): ?>
    <tr class="objekt">
      <td><?php echo $current['title']; ?></td>
      <td class="objekt_img"><img alt="objekt_image" src="<?php echo $current['image']; ?>"></td>
      <td><?php echo $current['text']; ?></td>
    </tr>

  <?php endforeach; ?>
  <?php endif; ?>
</table>
</form>




