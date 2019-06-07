<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-green">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="container-fluid">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if($page=='home'){echo 'active'; } ?>">
                <a class="nav-link" href="index.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item <?php if($page=='tentang'){echo 'active'; } ?>">
                <a class="nav-link" href="tentang.php">Tentang</a>
            </li>
            <li class="nav-item <?php if($page=='peta'){echo 'active'; } ?>">
                <a class="nav-link" href="peta.php#12/-7.2995/112.8351">Peta</a>
            </li>
            <li class="nav-item <?php if($page=='galeri'){echo 'active'; } ?>">
                <a class="nav-link" href="gallery.php">Galeri</a>
            </li>
        </ul>
    </div>
  </div>
</nav>