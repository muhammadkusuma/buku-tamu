<?= $this->extend('layout/home/index'); ?>

<?= $this->section('content') ?>

<!-- Content -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Daftar Pengunjung</h1>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Keperluan</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Wira</td>
                                    <td>gakpunya@gmail.com</td>
                                    <td>Nyari Jodoh</td>
                                    <td>12 Januari</td>
                                    <td>10.00</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>