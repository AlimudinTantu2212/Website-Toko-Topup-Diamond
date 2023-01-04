<div class="container-flid">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-target="#carouselExampleIndicators" data-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-target="#carouselExampleIndicators" data-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-target="#carouselExampleIndicators" data-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/aldin1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/aldin2.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-Slide="prev">
            <span class="calrosel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-Slide="next">
            <span class="calrosel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">next</span>
        </a>
    </div>
    <div class="row text-center mt-4">
        <?php foreach ($diamond as $dm) : ?>
            <div class="card ml-3 mb-3" style="width: 16rem;">
                <img src="<?php echo base_url() . '/uploads/' . $dm->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-2"><?php echo $dm->kategori ?></h5>
                    <small><?php echo $dm->keterangan ?></small><br>
                    <span class="badge badge-pill badge-success mb-3">Rp.<?php echo number_format($dm->harga, 0, ',', '.') ?></span><br>
                    <?php echo anchor('dashboard/tambah_pesanan/' . $dm->id_diamond, '<div class="btn btn-sm btn-primary">Tambah Pesanan</div>') ?>
                    <?php echo anchor('dashboard/detail/' . $dm->id_diamond, '<div class="btn btn-sm btn-success">Detail</div>') ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <?php echo $this->pagination->create_links() ?>
</div>