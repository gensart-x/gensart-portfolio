<?php

// im really lazy to do this, agents might rework the whole web app soon maybe.

$projects = [
    // Setiap entri punya dua slot tautan, keduanya boleh null:
    //   'repo' -> URL repo GitHub (hanya ditampilkan untuk proyek 'personal')
    //   'demo' -> URL demo langsung; kalau null tombolnya tampil nonaktif
    //             dan menampilkan toast "belum tersedia" saat diklik.
    [
        'image'     => 'x1-billing.png',
        'repo'      => null,
        'demo'      => null,
        // 'client' = permintaan klien, 'personal' = hasil coba/personal
        'category'  => 'personal',
        'title'     => 'RT/RW Net Billing App',
        'subtitle'  => 'Aplikasi berbasis web untuk melakukan manajemen tagihan, infrastruktur, dsb. dalam sebuah usaha WiFi skala RT/RW net.'
    ],
    [
        'image'     => 'kios-ropeg.png',
        'repo'      => null,
        'demo'      => null,
        'category'  => 'client',
        'title'     => 'Kios Pelayanan Kepegawaian ROPEG',
        'subtitle'  => 'Aplikasi berbasis web untuk melayani pelayanan data kepegawaian secara digital di Kementerian Pertahanan RI'
    ],
    [
        'image'     => null,
        'repo'      => null,
        'demo'      => null,
        'category'  => 'client',
        'title'     => 'Integrator SIASN x SIMPEG Kemhan',
        'subtitle'  => 'Aplikasi berbasis web untuk memfasilitasi sinkronisasi data SIASN BKN dan SIMPEG di Kementerian Pertahanan RI'
    ],
];

$workExperiences = [
    [
        'logo'      => '1.png',
        'period'    => '2020 - 2022',
        'position'  => 'Operator Sekolah',
        'company'   => 'SMK Selagan Jaya',
        'type'      => 'Full WFO'
    ],
    [
        'logo'      => '2.jpg',
        'period'    => '2022 - 2026',
        'position'  => 'IT & Web Developer',
        'company'   => 'Naafi Interkoneksi Indonesia',
        'type'      => 'Hybrid'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<?php include './partials/head.php' ?>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <!-- start preloader -->
        <?php include './partials/preloader.php' ?>
        <!-- end preloader -->
        <!-- Start header -->
        <?php include './partials/header.php' ?>
        <!-- end of header -->
        <!-- start of hero -->
        <section class="hero wpo-hero-style-3">
            <div class="hero-static" id="hero-statica">
                <div class="hero-inner">
                    <div class="slider-image">
                        <img src="assets/images/slider/slide-3.png" alt class="slider-bg">
                    </div>
                    <div class="container">
                        <div class="slide-content">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2><span>Halo,</span>
                                    Saya Genes.</h2>
                            </div>
                            <div data-swiper-parallax="300" class="slide-sub-title">
                                <h5>IT Support & Web Developer</h5>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>
                                    Dengan nama Genesaret Johnes yang biasa dipanggil Genes, saya sering berkecimpung di dunia komputer untuk pekerjaan profesional maupun personal.
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div class="slide-btn">
                                <a class="theme-btn" href="mailto:gensart.x@gmail.com">Email Me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dark_svg">
                <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                    <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 " />
                </svg>
            </div>
        </section>
        <!-- end of hero slider -->

        <!-- start of wpo-about-area -->
        <div class="wpo-about-area-s2 section-padding" id="about-me">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="wpo-about-img">
                            <img src="assets/images/about2.jpg" alt="">
                            <div class="icon-1 floating-item"><img src="assets/images/icon/photoshop.svg" alt=""></div>
                            <div class="icon-2 floating-item"><img src="assets/images/icon/illustrator.svg" alt="">
                            </div>
                            <div class="icon-3 floating-item"><img src="assets/images/icon/diamond.svg" alt=""></div>
                            <div class="project floating-item">
                                <div class="icon">
                                    <i class="fi flaticon-verified"></i>
                                </div>
                                <div class="p-text">
                                    <h3><span class="odometer" data-count="4">00</span>+</h3>
                                    <p>Proyek Selesai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-12 col-sm-12">
                        <div class="wpo-about-content">
                            <div class="wpo-about-title">
                                <h2>Tentang Saya</h2>
                                <p>
                                    Sudah bertekun di dunia IT sejak masih PKL SMK di 2017 hingga saat ini. Saya juga telah membantu beberapa instansi dan UMKM untuk mendigitalisasikan keperluan bisnis mereka.
                                </p>
                                <p>
                                    Di waktu senggang, biasanya saya sering ngulik soal teknologi open-source yang biasanya bermanfaat untuk keperluan digitalisasi.
                                </p>
                                <p>
                                    Saya juga orangnya enjoy, mode formal? OK 💻, mode santai? Gas 😎
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ab-shape">
                <svg width="995" height="1495" viewBox="0 0 995 1495" fill="none">
                    <g opacity="0.3" filter="url(#filter0_f_39_4267)">
                        <circle cx="247.5" cy="747.5" r="247.5" fill="#FFE500" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4267" x="-500" y="0" width="1495" height="1495"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4267" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="line-shape-1">
                <img src="assets/images/about/shape1.png" alt="">
            </div>
            <div class="line-shape-2">
                <img src="assets/images/about/shape2.png" alt="">
            </div>
        </div>
        <!-- end of wpo-about-area -->

        <!-- start of wpo-work-area -->
        <div class="wpo-work-area-s2 section-padding" id="work-experience">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="wpo-section-title">
                            <h2>Pengalaman Kerja</h2>
                            <p>
                                Lulus pendidikan di tahun 2020, dengan total pengalaman kerja sekitar 6 tahun. Siap mode tempur.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="wpo-work-wrap">
                    <div class="row">
                        <?php foreach ($workExperiences as $experience): ?>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="wpo-work-item mb-3 mb-md-1">
                                    <ul>
                                        <li class="logo"><img src="assets/images/work/<?= $experience['logo'] ?>" alt="<?= $experience['company'] ?>-logo" width="82"></li>
                                        <li class="date"><?= $experience['period'] ?></li>
                                        <li class="position">
                                            <?= $experience['position'] ?>
                                            <span>
                                                <?= $experience['company'] ?>
                                                <span>(<?= $experience['type'] ?>)</span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="shape-wk">
                <svg width="1500" height="1500" viewBox="0 0 1500 1500" fill="none">
                    <g opacity="0.45" filter="url(#filter0_f_39_4212)">
                        <circle cx="750" cy="750" r="200" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4212" x="0" y="0" width="1500" height="1500"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="275" result="effect1_foregroundBlur_39_4212" />
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <!-- end of wpo-work-area -->

        <!-- start of wpo-project-area -->
        <div class="wpo-project-area section-padding mb-md-5" id="project">
            <div class="container">
                <div class="wpo-section-title-s2">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-12">
                            <div class="title">
                                <h2>Proyek Terkini</h2>
                                <p>Beberapa <em>project</em> yang pernah saya selesaikan, baik itu permintaan klien, maupun hasil coba/personal.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-2">
                            <div class="sec-title-icon">
                                <i class="fi flaticon-self-growth"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpo-project-wrap wpo-project-slide owl-carousel">
                    <?php foreach ($projects as $project): ?>
                        <?php
                        // PhotoSwipe sizes slides from these values; wrong numbers stretch the image.
                        $imagePath = 'assets/images/project/' . ($project['image'] ?? 'privacy-notice.jpg');
                        $imageSize = @getimagesize(__DIR__ . '/' . $imagePath);
                        $pswpSize  = $imageSize ? 'data-pswp-width="' . $imageSize[0] . '" data-pswp-height="' . $imageSize[1] . '"' : '';

                        // Anything that is not explicitly 'client' is treated as personal.
                        $category      = ($project['category'] ?? '') === 'client' ? 'client' : 'personal';
                        $categoryLabel = $category === 'client' ? 'Klien' : 'Personal';

                        // Repo is only meaningful for our own projects; a client
                        // build normally lives on their infrastructure, so the
                        // button is left out entirely for client work.
                        $showRepo = $category === 'personal';
                        $repoUrl  = $showRepo ? ($project['repo'] ?? null) : null;
                        $demoUrl  = $project['demo'] ?? null;

                        /**
                         * Builds one action button. A missing url renders the same
                         * button non-clickable plus a data-project-no-link marker,
                         * which notiflix-setup.js turns into a toast via delegation.
                         */
                        $projectAction = static function (string $kind, string $label, ?string $url) use ($project): string {
                            $icon = $kind === 'repo' ? 'fa fa-github' : 'fa fa-external-link';

                            if ($url) {
                                return '<a class="wpo-project-action wpo-project-action--' . $kind . '"'
                                    . ' href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '"'
                                    . ' target="_blank" rel="noopener noreferrer">'
                                    . '<i class="' . $icon . '" aria-hidden="true"></i>'
                                    . '<span>' . $label . '</span>'
                                    . '</a>';
                            }

                            return '<button type="button" class="wpo-project-action wpo-project-action--' . $kind . ' is-disabled"'
                                . ' aria-disabled="true"'
                                . ' data-project-no-link="' . $kind . '"'
                                . ' data-project-name="' . htmlspecialchars($project['title'], ENT_QUOTES, 'UTF-8') . '">'
                                . '<i class="' . $icon . '" aria-hidden="true"></i>'
                                . '<span>' . $label . '</span>'
                                . '</button>';
                        };
                        ?>
                        <div class="wpo-project-item">
                            <div class="wpo-project-img">
                                <a href="<?= $imagePath ?>" <?= $pswpSize ?> target="_blank">
                                    <img src="<?= $imagePath ?>" alt="project-image">
                                </a>
                            </div>
                            <div class="wpo-project-text">
                                <span class="wpo-project-tag wpo-project-tag--<?= $category ?>"><?= $categoryLabel ?></span>
                                <h2><?= $project['title'] ?></h2>
                                <span class="wpo-project-desc"><?= $project['subtitle'] ?></span>
                                <div class="wpo-project-actions">
                                    <?= $projectAction('demo', 'Demo', $demoUrl) ?>
                                    <?php if ($showRepo): ?>
                                        <?= $projectAction('repo', 'Repo GitHub', $repoUrl) ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="shape-p">
                <svg width="1325" height="1687" viewBox="0 0 1325 1687" fill="none">
                    <g filter="url(#filter0_f_39_4166)">
                        <circle cx="481.5" cy="843.5" r="343.5" fill-opacity="0.27" />
                    </g>
                    <defs>
                        <filter id="filter0_f_39_4166" x="-362" y="0" width="1687" height="1687"
                            filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                            <feGaussianBlur stdDeviation="250" result="effect1_foregroundBlur_39_4166" />
                        </filter>
                    </defs>
                </svg>
            </div>
            <div class="line-shape-1">
                <img src="assets/images/project/line-1.png" alt="">
            </div>
            <div class="line-shape-2">
                <img src="assets/images/project/line-2.png" alt="">
            </div>
        </div>
        <!-- end of wpo-project-area -->

        <!-- start wpo-site-footer -->
        <?php include './partials/footer.php' ?>
        <!-- end wpo-site-footer -->

    </div>
    <!-- end of page-wrapper -->
    <?php include './partials/script.php' ?>

    <script>
        $(function() {
            const lightbox = new PhotoSwipeLightbox({
                // each project image is its own single-slide gallery, so the
                // viewer never navigates between projects
                gallery: '.wpo-project-img',
                // mouse wheel = zoom (Ctrl not required); when zoomed in,
                // click-and-drag pans the image
                wheelToZoom: true,
                pswpModule: () => PhotoSwipe
            });
            lightbox.init();
        });
    </script>
</body>

</html>