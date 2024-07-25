<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="../assets/img/logoST.png" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
      <ul id="nav-menu">
        <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home<br></a></li>
        <li><a href="features.php" class="<?= $current_page == 'features.php' ? 'active' : '' ?>">Features</a></li>
        <li><a href="about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About Us</a></li>
        <li><a href="contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact Us</a></li>
    </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a class="btn-getstarted" href="#">Join Us</a>

    </div>
  </header>