<?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-dark shadow-md border-0  alert-dismissible h-6" role="alert" style="background-color: #BDE3FF; width:28rem;">
        <h2><i class="bi bi-check-circle"></i> <?= session()->getFlashdata('success') ?></h2>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="alert alert-dark shadow-md border-0  alert-dismissible h-6" style="background-color: #FF9191; width:23rem;">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <h4 class="pz-4"><i class="bi bi-x-octagon"></i>   <?= esc($error) ?></h4>
            <?php endforeach; ?>
    </div>
<?php endif; ?>