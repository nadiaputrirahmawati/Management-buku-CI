<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title><?= $title ?></title>
    <!-- CSS files -->
    <link href="<?= base_url('assets/css/tabler.min.css?1692870487') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/tabler-flags.min.css?1692870487') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/tabler-payments.min.css?1692870487') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/tabler-vendors.min.css?1692870487') ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/demo.min.css?1692870487') ?>" rel="stylesheet" />

    <link href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        @import url('https://rsms.me/inter/inter.css');
        @import url('https://fonts.cdnfonts.com/css/telegraf');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        * {
            font-family: 'telegraf';
            letter-spacing: '4px';
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="<?= base_url('assets/js/demo-theme.min.js?1692870487') ?> "></script>
    <div class="page">
        <!-- Navbar -->
        <div class="sticky-top">
            <header class="navbar navbar-expand-md sticky-top d-print-none">
                <div class="container-xl">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 "> -->
                        <h1 class="pt-2" style="font-family: 'telegraf'; letter-spacing:1px"> Management Buku</h1>
                    <!-- </h1> -->
                </div>
            </header>

            <?= view('components/navbar', ['active_page' => $active_page]); ?>

        </div>
        <div class="page-wrapper">

            <!-- Konten  -->
            <div class="page-body">
                <div class="container-xl">
                    <?= $this->renderSection('main-content'); ?>
                </div>
            </div>

            <!-- Page header -->
            <footer class="footer d-print-none text-dark fw-semibold" style="background-color: #BDE3FF;">
                <div class="container-xl text-center">
                    <ul class="list-inline list-inline-dots mb-0 ">
                        <li class="list-inline-item">
                            Copyright &copy; 2023
                            <a href="https://nadp.my.id/" class="link-secondary"> Nad & Jia </a>.
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script> -->
    <script>
        // Inisialisasi DataTable dengan konfigurasi dasar
        var table = new DataTable('#tableBio', {
            paging: true,
            searching: true,
            ordering: true,
            // language: {
            //     url: 'https://cdn.datatables.net/plug-ins/2.1.8/i18n/id.json', // Agar tampilan menjadi bahasa Indonesia
            // },
        });
    </script>
    <script src="<?= base_url('assets/libs/apexcharts/dist/apexcharts.min.js?1692870487') ?>" defer></script>
    <script src="<?= base_url('assets/libs/jsvectormap/dist/js/jsvectormap.min.js?1692870487') ?>" defer></script>
    <script src="<?= base_url('assets/libs/jsvectormap/dist/maps/world.js?1692870487') ?>" defer></script>
    <script src="<?= base_url('assets/libs/jsvectormap/dist/maps/world-merc.js?1692870487') ?>" defer></script>
    <!-- Tabler Core -->
    <script src="<?= base_url('assets/js/tabler.min.js?1692870487') ?>" defer></script>
    <script src="<?= base_url('assets/js/demo.min.js?1692870487') ?>" defer></script>

    <!-- <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.min.js"></script> -->
</body>

</html>