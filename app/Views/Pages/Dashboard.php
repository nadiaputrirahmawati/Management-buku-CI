<?= $this->extend('layout'); ?>
<?= $this->section('main-content'); ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-md-6 mb-2">
            <div class="card shadow-sm text-dark border-0 p-5 rounded-4" style="background-color: #BDE3FF;">
                <h1 class="fw-bold mb-3">Welcome To Dashboard</h1>
                <p>Yuk Lihat Buku buku !!</p>
            </div>
            <div class="row">
                <div class="col-md-12 mb-2 mt-3">
                    <div class="card shadow-sm border-0 p-5 rounded-4" s>
                        <h2 class="fw-bold mb-3 text-center"> Buku Terbaru</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= base_url('uploads/' . $bukutoday['gambar']) ?>" />
                            </div>
                            <div class="col-md-8">
                                <table class="table">
                                    <tr>
                                        <th> Title </th>
                                        <td> :</td>
                                        <td> <span> <?= $bukutoday['title'] ?></span></td>
                                    </tr>
                                    <tr>
                                        <th> Author </th>
                                        <td> :</td>
                                        <td> <span ><?= $bukutoday['author'] ?></span></td>
                                    </tr>
                                    <tr>
                                        <th> Genre </th>
                                        <td> :</td>
                                        <td> <span ><?= $bukutoday['genre'] ?></span></td>
                                    </tr>
                                    <tr>
                                        <th> Tanggal Publish</th>
                                        <td> :</td>
                                        <td> <span ><?= $bukutoday['tanggal'] ?></span></td>
                                    </tr>
                                    <tr>
                                        <th> Status</th>
                                        <td> :</td>
                                        <td> <span ><?= $bukutoday['status'] ?></span></td>
                                    </tr>
                                </table>
                            </div>
                            <h2 class="text-center"> Deskripsi </h2>
                            <p><?= $bukutoday['deskripsi'] ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-6 mb-4">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card shadow-sm bg-white border-0 p-2 text-center rounded-4">
                        <h1> Buku Terbaru</h1>
                        <h1><?= count($bukutodaycount); ?></h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                    <div class="card shadow-sm bg-white border-0 p-2 text-center rounded-4">
                        <h1>Buku</h1>
                        <h1><?= count($data); ?></h1>
                    </div>
                </div>
            </div>
            <div class="card shadow-sm bg-white border-0 p-4 rounded-4">
                <h1 class="text-center">List Data  Buku Terbaru</h1>
                <ul class="list-group">
                    <?php $no = 1; ?>
                    <?php foreach ($databuku as $data): ?>
                        <li class="list-group-item">
                            <?= $no++, '.    ', $data['title']; ?> - (<?= $data['author']; ?>)
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="/buku/data  " class="mt-3 fs-4 text-end d-block">Selengkapnya...</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<!-- <div class="row gap-2">
                        <?php foreach ($databuku as $data): ?>
                            <div class="col-md-1">
                                <img src="<?= base_url('uploads/' . $data['gambar']) ?>" />
                            </div>
                            <div class="col-md-10">
                                <?= $data['title']; ?> - (<?= $data['author']; ?>)
                            </div>
                        <?php endforeach; ?>
                    </div> -->