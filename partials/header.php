<header id="header" class="wpo-header-style-1">
    <?php
    // Hash links only stay hash-only on index.php (that is what the template's
    // smooth-scroll handler binds to). Anywhere else they need the page prefix
    // so the browser can actually get there.
    $navBase = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php') === 'index.php' ? '' : 'index.php';
    ?>
    <div class="wpo-site-header">
        <nav class="navigation navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-2 d-lg-none dl-block header-menu-col">
                        <div class="mobail-menu">
                            <button type="button" class="navbar-toggler open-btn">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar first-angle"></span>
                                <span class="icon-bar middle-angle"></span>
                                <span class="icon-bar last-angle"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-6 header-logo-col">
                        <div class="navbar-header">
                            <a class="navbar-brand site-logo" href="<?= $navBase ?>#hero-statica">
                                <img src="assets/images/logo.png" alt="logo" width="100">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-1 col-1 header-nav-col">
                        <div id="navbar" class="collapse navbar-collapse navigation-holder">
                            <button class="menu-close"><i class="ti-close"></i></button>
                            <ul class="nav navbar-nav mb-2 mb-lg-0">
                                <li>
                                    <a href="<?= $navBase ?>#hero-statica">Home</a>
                                </li>
                                <li>
                                    <a href="<?= $navBase ?>#about-me">Tentang</a>
                                </li>
                                <li>
                                    <a href="<?= $navBase ?>#work-experience">Pengalaman</a>
                                </li>
                                <li>
                                    <a href="<?= $navBase ?>#project">Proyek</a>
                                </li>
                                <li>
                                    <a href="<?= $navBase ?>#gbi-kc">GBI KC</a>
                                </li>
                                <li>
                                    <a class="nav-agents-link" href="agents.php">AGENTS.md</a>
                                </li>
                            </ul>

                        </div><!-- end of nav-collapse -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-3 header-cv-col">
                        <div class="header-right">
                            <a href="/curriculum-vitae.pdf" download="CV-Genesaret_Johnes-Redacted" class="btn cv-download-btn text-white fw-bold" aria-label="Unduh CV">
                                <i class="ti-download" aria-hidden="true"></i><span class="cv-download-label">CV</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- end of container -->
        </nav>
    </div>
</header>