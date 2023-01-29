<?= $this->extend('layout/guest/guest') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <div class="jumbotron">
        <!-- buku tamu digital -->
        <section class="title px-5 py-2">
            <div class="row ">
                <div class="col ">
                    <div class="row text-center row-kop">
                        <div class="col-2 logouin">
                            <img src="img/logo-uin.png" width="100px" height="100px" alt="logo uin" class="">
                        </div>
                        <div class="col text-center">
                            <h5>KEMENTRIAN AGAMA</h5>
                            <h5>UNIVERSITAS ISLAM NEGERI SULTAN SYARIF KASIM RIAU</h5>
                            <h5>LABORATORIUM PROGRAM STUDI SISTEM INFORMASI</h5>
                        </div>
                        <div class="col-2 logosi">
                            <img src="img/logo-si.jpeg" width="100px" height="100px" alt="logo si" class="">
                        </div>
                    </div>
                    <hr>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="text-center">Buku Tamu Digital</h4>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group pb-3">
                                                <label for="nama">Nama</label>
                                                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="asal">Asal</label>
                                                <input type="text" class="form-control" id="asal" placeholder="Masukkan asal Anda">
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                                            </div>
                                            <div class="form-group pb-3">
                                                <label for="tujuan">Tujuan Berkunjung</label>
                                                <textarea class="form-control" id="tujuan" rows="3"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block w-100">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?= $this->endSection() ?>