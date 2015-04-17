<nav class="aside_nav">

  <ul <?php if(isset($p)) echo "id='".strip_tags($p)."'"; ?>>
    <li><h4>Våra objekt</h4>
      <ul>
        <li id="objekt-readall"><a href="?p=read-all">Alla objekt</a>
        <li id="objekt-read"><a href="?p=read">Välj objekt</a>
        <li id="objekt-kategori"><a href="?p=read_category">Välj kategori</a>

      <?php if(false): ?>
        <li id="blokket-init"><a href="?p=init">Initiera</a>
        <li id="blokket-update"><a href="?p=update">Uppdatera annons</a>
        <li id="blokket-add"><a href="?p=create">Lägg till annons</a>
        <li id="blokket-delete"><a href="?p=delete">Ta bort annons</a>
      <?php endif; ?>

      </ul>
  </ul>
</nav>
