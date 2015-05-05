<h1>Skapa ett krypterat lösenord</h1>

<p>Du kan generera ett krypterat lösenord genom att använda funktionen <code>userPassword()</code>
som finns i filen <code>src/login.php</code>. Här följer ett exempel. Skriv in ditt lösenord och 
dess krypterade motsvarighet kommer att visas.</p>

<form method="post" action="<?=($_SERVER['PHP_SELF'])?>">
  <fieldset>
    <legend>Kryptera lösenord</legend>
    <p>
      <label for="input2">Lösenord:</label><br>
      <input id="input2" class="text" type="password" name="password">
    </p>
    <p>
      <input type="submit" name="doIt" value="Kryptera">
      <input type="reset" value="Rensa">
    </p>

<?php if(isset($_POST['doIt'])): ?>
    <p>
      <output class="success">Det krypterade lösenordet blev: <?php echo userPassword($_POST['password']); ?></output>
    </p>
<?php endif; ?>

  </fieldset>
</form>

<p>Källkoden, <code>src/login.php</code>, 
<a href="viewsource.php?dir=src&amp;file=login.php#file">hittar du här</a>.</p>
