<nav class="aside_nav">

  <ul <?php if(isset($p)) echo "id='".strip_tags($p)."'"; ?>>
    <li><h4>Artiklar</h4>
      <ul>
        <li id="read-all"><a href="?p=read-all">Alla artiklar</a>
        <li id="read"><a href="?p=read">Välj artikel</a>
      </ul>
  </ul>

</nav>
