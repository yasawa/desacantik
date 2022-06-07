<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" <?php if ($judul == 'Home') { ?> href="#page-top" <?php } else { ?> href="<?= base_url(); ?>" <?php } ?>>Desa Cantik </br> Kab. Ogan Ilir</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <?php if ($judul == 'Home') { ?>
                        <li class="nav-item"><a class="nav-link" href="#about">Desa Cantik</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">BPS Kabupaten Ogan Ilir</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kab">Kabupaten Ogan Ilir</a></li>
                    <?php } elseif ($judul == 'Desa Pipa Putih') { ?>
                        <li class="nav-item"><a class="nav-link" href="#page-top"><?= $judul; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Sejarah Desa</a></li>
                        <li class="nav-item"><a class="nav-link" href="#peta-tematik">Peta Tematik</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Demografi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kab">Sumber Daya Alam</a></li>
                    <?php } elseif ($judul == 'Desa Burai') { ?>
                        <li class="nav-item"><a class="nav-link" href="#page-top"><?= $judul; ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Visi Misi Desa</a></li>
                        <li class="nav-item"><a class="nav-link" href="#peta-tematik">Peta Tematik</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Demografi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#kab">Desa Wisata</a></li>
                        <li class="nav-item"><a class="nav-link" href="#galeri">Galeri Desa Wisata</a></li>
                    <?php } ?>

                </ul>
            </div>
        </div>
    </nav>