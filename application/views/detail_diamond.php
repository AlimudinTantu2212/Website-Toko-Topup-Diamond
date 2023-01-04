<div class="container-fluid">
    
    <div class="card">
        <h5 class="card-header">Detail Diamond</h5>
        <div class="card-body">

        <?php foreach($diamond as $dm): ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/uploads/'.$dm->gambar ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Kategori</td>
                            <td><strong><?php echo $dm->kategori ?></strong></td>
                        </tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $dm->keterangan ?></strong></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td><strong><?php echo $dm->jumlah ?></strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn ben-sm btn-success">Rp.<?php echo number_format($dm->harga,0,',','.') ?></div></strong></td>
                        </tr>
                                                
                    </table>
                    <div></div>
                    <?php echo anchor('dashboard/tambah_pesanan/'.$dm->id_diamond,'<div class="btn btn-sm btn-primary">Tambah Pesanan</div>')?>
                    <?php echo anchor('welcome','<div class="btn btn-sm btn-danger">Kembali</div>')?>

                </div>
            </div>

        <?php endforeach ; ?>

        </div>

    </div>

</div>

