<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA DIAMOND</h3>

    <?php foreach($diamond as $dm) :?>

        <form method="post" action="<?php echo base_url().'admin/data_diamond/update' ?>">
        
            <div class="form-group">
                <label>KATEGORI</label>
                <select class="form-control" name="kategori" value="<?php echo $dm->kategori?>">
                    <option>Mobile Legend</option>
                    <option>PUBG Mobile</option>
                    <option>Free Fire</option>
                    <option>Clash of Clans</option>
                    <option>Call of Duty Mobile</option>
                </select>
            </div>

            <div class="form-group">
                <label">JUMLAH DIAMOND</label>
                <input type="hidden" name="id_diamond" class="form-control" value="<?php echo $dm->id_diamond?>">
                <input type="text" name="jumlah" class="form-control" value="<?php echo $dm->jumlah?>">
            </div>

            <div class="form-group">
                <label">HARGA</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $dm->harga?>">
            </div>

            <div class="form-group">
                <label">KETERANGAN</label>
                <input type="text" name="keterangan" class="form-control" value="<?php echo $dm->keterangan?>">
            </div>

            <button type="submit" class="btn btn-danger btn-sm mt-3">BATAL</button>
            <button type="submit" class="btn btn-primary btn-sm mt-3">SIMPAN</button>

        </form>

    <?php endforeach; ?>
</div>