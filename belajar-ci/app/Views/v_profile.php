<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
                        <!-- Kotak Informasi Profile -->
                        <div class="card shadow-none border p-4">
                            <h5 class="card-title p-0 mb-4" style="color: #012970;">Profile Information</h5>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label" style="color: #4154f1; font-weight: 600;">Username</div>
                                <div class="col-lg-9 col-md-8"><?= session()->get('username'); ?></div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label" style="color: #4154f1; font-weight: 600;">Role</div>
                                <div class="col-lg-9 col-md-8">
                                    <span class="badge bg-danger"><?= session()->get('role'); ?></span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label" style="color: #4154f1; font-weight: 600;">Email</div>
                                <div class="col-lg-9 col-md-8" style="color: #4154f1;"><?= session()->get('email'); ?></div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label" style="color: #4154f1; font-weight: 600;">Login Time</div>
                                <div class="col-lg-9 col-md-8"><?= session()->get('waktu_login'); ?></div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-lg-3 col-md-4 label" style="color: #4154f1; font-weight: 600;">Status</div>
                                <div class="col-lg-9 col-md-8">
                                    <span class="badge bg-success">
                                        <i class="bi bi-check-circle me-1"></i> Sudah Login
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?= $this->endSection() ?>