<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <p></p>
      </li>
        <?php

        foreach ($okres as $item){
            echo ("<li class='nav-item'>"
                .anchor("Okres/" .$item->kod, $item->nazev, ['class' => 'nav-link'])."</li>");

        } ?>
       
    </ul>
  </div>
</nav>
