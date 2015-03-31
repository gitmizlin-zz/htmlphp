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

$select = "<select id='input1' name='select_category' onchange='form.submit();'>";
$select .= "<option value='-1'>Välj kategori</option>";

foreach($res as $category) {
  $category = $category['category'];
  $selected = "";
  if(isset($_POST['select_category']) && $_POST['select_category'] == $category) {
    $selected = "selected";
    $current = $category;
  }
  $select .= "<option value='$category' {$selected}>$category</option>";
}

$select .= "</select>";

?>

<h1>Museiobjekt</h1>

<table>
  <caption><em>Objekt efter kategori</em></caption>

  <tr>
    <th>Kategori:</th>
    <th>Bild:</th>
    <th>Beskrivning:</th>
  </tr>

  <?php foreach($res as $obj): ?>

  <tr class="objekt">
    <td><?php echo $obj['category']; ?></td>
    <td class="objekt_img"><img alt="objekt_image" src="<?php echo $obj['image']; ?>"></td>

<!--     <?php print_r($obj['image']); ?> output the content of the variable-->

    <td><?php echo $obj['text']; ?></td>
  </tr>

  <?php endforeach; ?>

</table>


