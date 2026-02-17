<nav class="navbar navbar-expand-sm bg-light">

  <div class="container-fluid">
    <ul class="navbar-nav">

        <?php
        foreach ($navbar as $row) {
        ?>    
          <li class="nav-item">
              <a class="nav-link" href="<?=   base_url("okres/$row->kod")?>"><?= $row->nazev ?></a>
          </li>
        <?php
      }
      ?>
    </ul>
  </div>

</nav>