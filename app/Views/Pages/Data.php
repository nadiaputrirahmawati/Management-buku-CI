<?= $this->extend('layout') ?>
<?= $this->section('main-content') ?>

<?= $this->include('Pages/Tambahdata') ?>


<div class="row justify-content-start">
    <?php foreach ($buku as $data) : ?>
        <div class="col-lg-4 mb-3 col-md-3 col-sm-3">
            <div class="card shadow-md border-0">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?= base_url('uploads/' . $data['gambar']) ?>" />
                    </div>
                    <div class="col-md-6 p-2">
                        <span class="badge rounded-pill text-white pt-2 pb-2 mt-2 pl-3 " style="background-color: #003E6B;"> <?= $data['tanggal'] ?></span>
                        <h2 class="mt-2"> <?= $data['title'] ?> </h2>
                        <h3><i class="bi bi-person-fill"></i> <?= $data['author'] ?></h3>
                        <h4><i class="bi bi-bookmarks-fill pz-3"></i>   <?= $data['genre'] ?></h4>

                        <a href="<?= 'all/detail/' . htmlspecialchars($data['id_buku']) ?>" class="btn rounded-pill border-0" style="margin-top: 2rem; background-color: #BDE3FF;">Selengkapnya ...</a>

                    </div>
                </div>
            </div>
        </div>

    <?php endforeach ?>
</div>
<?= $this->endSection() ?>