<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      <!-- Uncomment below if you prefer to use text as a logo -->
      <!-- <h1 class="logo"><a href="index.html">Butterfly</a></h1> -->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'beranda') { echo 'active'; } ?>" href="?page=beranda">Beranda</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'tentang-sekolah') { echo 'active'; } ?>" href="?page=tentang-sekolah">Tentang Sekolah</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'services') { echo 'active'; } ?>" href="?page=services">Services</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'portfolio') { echo 'active'; } ?>" href="?page=portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto <?php if(isset($_GET['page']) && $_GET['page'] == 'team') { echo 'active'; } ?>" href="?page=team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto  <?php if(isset($_GET['page']) && $_GET['page'] == 'contact') { echo 'active'; } ?>" href="?page=contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->