<?php $this->extend('layout') ?>
<?php $this->section('main-content') ?>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-2">
                <img src="<?= base_url('uploads/' . $detail['gambar']) ?>" />
            </div>
            <div class="col-lg-8 col-md-10 col-sm-10">
                <h2 style="font-family: 'telegraf" class="text-center fs-1 mb-3 mt-4"> <?= $detail['title'] ?> </h2>
                <table class="table">
                    <tr>
                        <th> Author </th>
                        <td> :</td>
                        <td> <span ><?= $detail['author'] ?></span></td>
                    </tr>
                    <tr>
                        <th> Genre </th>
                        <td> :</td>
                        <td> <span ><?= $detail['genre'] ?></span></td>
                    </tr>
                    <tr>
                        <th> Tanggal Publish</th>
                        <td> :</td>
                        <td> <span class="badge rounded-pill text-bg-primary"><?= $detail['tanggal'] ?></span></td>
                    </tr>
                    <tr>
                        <th> Deskripsi</th>
                        <td> :</td>
                        <td> <span><?= $detail['deskripsi'] ?></span></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>