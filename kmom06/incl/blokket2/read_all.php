<?php
//
// Connect to the database
//
$db = new PDO("sqlite:$dbPath");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Display errors, but continue script

//
// Read from database
//
$stmt = $db->prepare('SELECT * FROM Ads;');
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<h1>Visa alla annonser</h1>

<table>
  <caption><em>Samtliga annonser i Blokket.</em></caption>

  <tr>
    <th>Titel:</th>
    <th>Bild:</th>
    <th>Beskrivning:</th>
  </tr>
  
  <?php foreach($res as $ad): ?>
  
  <tr class="annons">
    <td><?php echo $ad['title']; ?></td>
    <td class="annons_img"><img alt="annons_image" src="<?php echo $ad['image']; ?>"></td>

<!--     <?php print_r($ad['image']); ?> output the content of the variable-->

    <td><?php echo $ad['description']; ?></td>
  </tr>
  
  <?php endforeach; ?>

</table>