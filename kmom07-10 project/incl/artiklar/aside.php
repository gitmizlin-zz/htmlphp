<nav class="vmenu">

  <ul <?php if(isset($p)) echo "id='".strip_tags($p)."'"; ?>>
    <li><h4>Artiklar</h4>
      <ul>
        <li id="read-all"><a href="?p=read-all">Alla artiklar</a>
        <li id="read"><a href="?p=read">Välj artikel</a>

        <li id="blokket-init"><a href="?p=init">Initiera</a>
        <li id="blokket-update"><a href="?p=update">Uppdatera annons</a>
        <li id="blokket-add"><a href="?p=create">Lägg till annons</a>
        <li id="blokket-delete"><a href="?p=delete">Ta bort annons</a>
        <li id="blokket-read"><a href="?p=read">Visa annons</a>
        <li id="blokket-readall"><a href="?p=read-all">Visa alla annonser</a>
      </ul>
  </ul>

</nav>
