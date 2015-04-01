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

<h1>Museiobjekt</h1>

<table>
  <caption><em>Samtliga objekt i BMO</em></caption>

  <?php foreach($res as $obj): ?>

  <tr class="objekt">
    <td><?php echo $obj['text']; ?></td>
    <td class="objekt_img"><img alt="objekt_image" src="<?php echo $obj['image']; ?>"></td>
<!--     <?php print_r($obj['image']); ?> output the content of the variable-->

    <td><?php echo $obj['text']; ?></td>
    <td><?php echo "Kategori: " . $obj['category']; ?></td>
    <td><?php echo "Ägare: " . $obj['owner']; ?></td>

  </tr>

  <?php endforeach; ?>

</table>
