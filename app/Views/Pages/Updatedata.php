<!-- Modal -->
<div class="modal fade" id="modalEditData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="updateForm" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" id="id_buku" name="id_buku">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="titlebukuInput" value="<?= old('title') ?>">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" id="authorbukuInput" value="<?= old('author') ?>">
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <img id="imagePreview" src="" alt="Image Preview" style="max-width: 200px; margin-top: 10px;">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="genre" class="form-label">Genre</label>
                                <input type="text" class="form-control" name="genre" id="genreInput">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" name="gambar" id="gambarbukuInput">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" name="status" id="statusbukuInput">
                                    <option value="publish">Publish</option>
                                    <option value="private">Private</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="datebukuInput" value="<?= old('tanggal') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="deskripsibukuInput" name="deskripsi"><?= old('deskripsi') ?></textarea>
                            <label for="deskripsi">Deskripsi</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).on('click', '#editForm', function() {
        var id_buku = $(this).data('id_buku');

        $.ajax({
            url: "<?= base_url('buku/detail'); ?>/" + id_buku,
            method: "GET",
            dataType: "json",
            success: function(data) {
                if (data.error) {
                    alert(data.error);
                } else {
                    console.log(data);

                    $('#titlebukuInput').val(data.title);
                    $('#authorbukuInput').val(data.author);
                    $('#datebukuInput').val(data.tanggal);
                    $('#statusbukuInput').val(data.status);
                    $('#deskripsibukuInput').val(data.deskripsi);
                    $('#genreInput').val(data.genre);

                    $('#imagePreview').attr('src', '<?= base_url('uploads/') ?>' + data.gambar);
                    $('#imagePreview').show();

                    $('#updateForm').attr('action', '<?= base_url('buku/update/') ?>' + id_buku);
                }
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
                alert('Terjadi kesalahan saat mengambil data.');
            }
        });
    });
</script>