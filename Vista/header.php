<?php
include('configLang.php');
?>
<header>
  <div class="brand-logo">
    <a>Andres (IESMANACOR)</a>
  </div>

  <input type="checkbox" id="toggle-btn">
  <label for="toggle-btn" class="show-menu-btn"><i class="fas fa-bars"></i></label>

  <nav>
    <ul class="navigation">
      <li><a href="#"><i class="fas fa-house-damage"></i><?php echo $lang['Home']?></a></li>
      <li><a href="/Vista/llista.php"><i class="fas fa-list-ol"></i><?php echo $lang['List']?></a></li>
      <li><a href="/Vista/counter.php"><i class="fas fa-sort-numeric-up"></i><?php echo $lang['Count']?></a></li>
      <li><a href="/Vista/carreta.php"><i class="fas fa-shopping-cart"></i><?php echo $lang['Cart']?></a></li>
      <label for="toggle-btn" class="hide-menu-btn"><i class="fas fa-times"></i></label>
      <li><a href="/Vista/login.php"><i class="far fa-address-card"></i><?php echo $lang['Login']?></a></li>
      <li>
          <a><i class='fas fa-language'></i><?php echo $lang['Tougle']?></a>
          <div class="submenu">
                  <ul>
<?php
include('configLang.php');
if (isset($idiomas)) {
        for ($x = 0, $size = count($idiomas); $x < $size; $x++) {
                echo "<li><button onclick=\"window.open('/configLang.php?lang=".$idioma[$x]."','_blank');setTimeout(function(){location.reload()},500);\" type='button'>$idiomas[$x]</button></li>";
	}
}
?>
                  </ul>
          </div>
      </li>
    </ul>
  </nav>
</header>
