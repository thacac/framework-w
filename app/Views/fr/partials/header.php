<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Header en Français</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= $this->url($w_admin_pref.'index') ?>">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/fr/">FR</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/en/">EN</a>
                </li>

            </ul>
        </div>
    </nav>
</header>