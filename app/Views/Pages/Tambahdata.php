<a href="#" class="btn rounded-pill mb-3 text-end border-0" style="width: 8rem; background-color: #BDE3FF;" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data</a>

<?= $this->include('components/Flasher') ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/buku/tambah" method="POST" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="<?= old('title') ?>">
                    </div>
                    <?php if (session('validation.title')): ?>
                        <div class="invalid-feedback">
                            <?= session('validation.title') ?>
                        </div>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" name="author" id="author" value="<?= old('author') ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Gambar</label>
                                <input type="file" class="form-control" name="gambar" id="gambar" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Genre</label>
                                <input type="text" class="form-control" name="genre" id="genre" value="<?= old('tanggal') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" name="status">
                                    <option value="publish">Publish</option>
                                    <option value="private">Private</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="tanggal" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?= old('tanggal') ?>">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="deskripsi" name="deskripsi"><?= old('deskripsi') ?></textarea>
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