<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_diamond"><i class="fas fa-plus fa-sm"></i>Tambah Diamond</button>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>KATEGORI</th>
            <th>JUMLAH</th>
            <th>HARGA</th>
            <th>KETERANGAN</th>
            <th colspan="3">ACTION</th>
        </tr>
        <?php
        $no=1;
        foreach($diamond as $dm) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $dm->kategori ?></td>
            <td><?php echo $dm->jumlah ?></td>
            <td><?php echo $dm->harga ?></td>
            <td><?php echo $dm->keterangan ?></td>
            <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
            <td><?php echo anchor('admin/data_diamond/edit/' .$dm->id_diamond, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
            <td><?php echo anchor('admin/data_diamond/hapus/' .$dm->id_diamond, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_diamond" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA</h5>
        <button type="submit" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/data_diamond/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>KATEGORI</label>
            <select class="form-control" name="kategori">
                <option>Mobile Legend</option>
                <option>PUBG Mobile</option>
                <option>Free Fire</option>
                <option>Clash of Clans</option>
                <option>Call of Duty Mobile</option>
            </select>
        </div> 
        <div class="form-group">
            <label>JUMLAH</label>
            <input type="text" name="jumlah" class="form-control">
        </div>
        <div class="form-group">
            <label>HARGA</label>
            <input type="text" name="harga" class="form-control">
        </div>
        <div class="form-group">
            <label>KETERANGAN</label>
            <input type="text" name="keterangan" class="form-control">
        </div>
        <div class="form-group">
            <label>GAMBAR DIAMOND</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>