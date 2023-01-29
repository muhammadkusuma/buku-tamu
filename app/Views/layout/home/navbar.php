<nav class="navbar navbar-expand-lg ">
    <div class="container-md">
        <a class="navbar-brand" href="#">Buku Tamu Digital</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-0 ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/'); ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/pengunjung'); ?>">Lihat Kunjungan</a>
                </li>
                <li class="nav-item ms-1">
                    <a class="btn" href="<?= base_url('/login'); ?>">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>