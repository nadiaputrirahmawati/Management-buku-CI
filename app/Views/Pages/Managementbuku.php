<?php

$this->extend('layout');
$this->section('main-content');

?>

<div class="row">
    <div class="col-md-12">
        <div class="card p-3 border-0 shadow">
            <?= $this->include('Pages/Tambahdata') ?>
            <div class="table-responsive">
                <table class="table text-dark table-striped" id="table">
                    <thead>
                        <tr>
                            <th class="fs-5 text-center fw-bold text-dark">No</th>
                            <th class="fs-5 text-center fw-bold text-dark">Gambar</th>
                            <th class="fs-5 text-center fw-bold text-dark">Author</th>
                            <th class="fs-5 text-center fw-bold text-dark">Tittle</th>
                            <th class="fs-5 text-center fw-bold text-dark">Status</th>
                            <th class="fs-5 text-center fw-bold text-dark">Date</th>
                            <th class="fs-5 text-center fw-bold text-dark">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($buku as $databuku) :  ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><img src="<?= base_url('uploads/' . $databuku['gambar']) ?>" alt="Book Image" class="shadow-md w-8 h-8"></td>
                                <td><?= $databuku['author'] ?></td>
                                <td><?= $databuku['title'] ?></td>
                                <td><?= $databuku['status'] ?></td>
                                <td><?= $databuku['tanggal'] ?></td>
                                <td>

                                    <div class="d-flex justify-content-center">
                                        <form action="<?= base_url('buku/' . $databuku['id_buku']) ?>" method="POST" style="display:inline;" class="delete-form">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger mx-1 rounded-3 shadow-md delete-btn"><i class="bi bi-trash"></i></button>
                                        </form>
                                        <button class="btn btn-primary mx-1 rounded-3 shadow-md" id="detailBtn"
                                            data-id_buku="<?= $databuku['id_buku'] ?>"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalDetail">
                                            <i class="bi bi-person-vcard"></i>
                                        </button>
                                        <button class="btn btn-warning mx-1 rounded-3 shadow-md" id="editForm"
                                            data-id_buku="<?= $databuku['id_buku'] ?>"
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalEditData">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();

            const linkId = this.getAttribute('data-id');
            const form = this.closest('form.delete-form');
            if (form) {
                Swal.fire({
                    title: 'Apakah Yakin?',
                    text: 'Anda Menghapus Data Buku Ini !',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            } else {
                console.error('Form tidak ditemukan!');
            }
        });
    });
</script>


<div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="modalDetailLabel">Detail Mahasiswa <span id="Title"></span> </h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="d-flex justify-content-center align-items-center">
                    <img src="" id="gambarbuku" alt="" class="img-fluid" style="max-width: 50%; height: auto;">
                </div>

                <table class="table">
                    <tr>
                        <th> Title </th>
                        <td> :</td>
                        <td> <span id="titlebuku"></span></td>
                    </tr>
                    <tr>
                        <th> Author </th>
                        <td> :</td>
                        <td> <span id="authorbuku"></span></td>
                    </tr>
                    <tr>
                        <th> Genre </th>
                        <td> :</td>
                        <td> <span id="genrebuku"></span></td>
                    </tr>
                    <tr>
                        <th> Tanggal Publish</th>
                        <td> :</td>
                        <td> <span id="datebuku"></span></td>
                    </tr>
                    <tr>
                        <th> Status</th>
                        <td> :</td>
                        <td> <span id="statusbuku"></span></td>
                    </tr>
                    <tr>
                        <th> Deskripsi</th>
                        <td> :</td>
                        <td> <span id="deskripsibuku"></span></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<?= $this->include('Pages/Updatedata') ?>

<script>
    $(document).on('click', '#detailBtn', function() {
        var id_buku = $(this).data('id_buku');

        $.ajax({
            url: "<?= base_url('buku/detail'); ?>/" + id_buku,
            method: "GET",
            dataType: "json",
            success: function(data) {
                if (data.error) {
                    alert(data.error);
                } else {
                    console.log(data)
                    $('#titlebuku').text(data.title);
                    $('#authorbuku').text(data.author);
                    $('#genrebuku').text(data.genre);
                    $('#datebuku').text(data.tanggal);
                    $('#statusbuku').text(data.status);
                    $('#deskripsibuku').text(data.deskripsi);
                    $('#gambarbuku').attr('src', '<?= base_url('uploads/') ?>' + data.gambar);
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Terjadi kesalahan saat mengambil data.');
            }
        });
    });
</script>



<script>
    $(document).ready(function() {
        $('#table').DataTable({
            "paging": true, // Menampilkan pagination
            "searching": true, // Menampilkan kolom pencarian
            "ordering": true, // Mengaktifkan pengurutan kolom
            "info": true, // Menampilkan informasi jumlah data
            "lengthChange": false, // Menonaktifkan opsi untuk mengubah jumlah baris per halaman
        });
    });
</script>


<?= $this->endSection() ?>