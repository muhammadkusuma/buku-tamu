<?= $this->extend('layout/home/index'); ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    
    <div class="jumbotron">
        <!-- buku tamu digital -->
        <section class="title px-5 py-2">
            <div class="row ">
                <div class="col ">
                    <div class="row text-center row-kop">
                        <div class="col-2 logouin">
                            <img src="<?= base_url('/img/logo-uin.png');?>" width="100px" height="100px" alt="logo uin" class="">
                        </div>
                        <div class="col text-center">
                            <h5>KEMENTRIAN AGAMA</h5>
                            <h5>UNIVERSITAS ISLAM NEGERI SULTAN SYARIF KASIM RIAU</h5>
                            <h5>LABORATORIUM PROGRAM STUDI SISTEM INFORMASI</h5>
                        </div>
                        <div class="col-2 logosi">
                            <img src="<?= base_url('/img/logo-si.jpeg');?>" width="100px" height="100px" alt="logo si" class="">
                        </div>
                    </div>
                    <hr>
                    <div class="row pt-5">
                        <h1 class="text-center">Buku Tamu Digital </h1>
                        <p class="desc-buku text-center">Buku Tamu Digital adalah sebuah sistem yang memungkinkan pengunjung untuk meninggalkan pesan atau komentar pada sebuah website secara online.</p>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
    
    
</div>


<?= $this->endSection() ?>