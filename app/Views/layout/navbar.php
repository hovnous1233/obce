<nav class="navbar navbar-expand-sm bg-light">

  <div class="container-fluid">
    <ul class="navbar-nav">
<li class="nav-item">
              <a class="nav-link" href="<?=   base_url()?>">Hlavní stránka</a>
          </li> 
        <?php
        
        foreach ($navbar as $row) {
        ?> 
       
          <li class="nav-item">
              <a class="nav-link" href="<?=   base_url("okres/$row->kod/kolik-na-strance/20")?>"><?= $row->nazev ?></a>
          </li>
        <?php
      }
      ?>
    </ul>
  </div>

</nav>