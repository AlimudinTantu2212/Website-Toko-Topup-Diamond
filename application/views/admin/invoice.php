<div class="container-fluid">
    <h4>Invoices Pemesanan Diamond</h4>
        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>Id Invoice</th>
                <th>Kategori</th>
                <th>Email</th>
                <th>User ID</th>
                <th>ID Server</th>                
                <th>Tanggal Pemesanan</th>
                <th>Batas Pembayaran</th>
                <th>Aksi</th>
            </tr>

            <?php foreach ($invoice as $inv) : ?>
                <tr>
                    <td><?php echo $inv->id ?></td>
                    <td><?php echo $inv->kategori ?></td>
                    <td><?php echo $inv->email ?></td>
                    <td><?php echo $inv->user_id ?></td>
                    <td><?php echo $inv->id_server ?></td>
                    <td><?php echo $inv->tgl_pesan ?></td>
                    <td><?php echo $inv->batas_bayar ?></td>
                    <td><?php echo anchor('admin/invoice/detail/' .$inv->id, '<div class="btn btn-sm btn-primary">Detail </div>')?></td>
                </tr>
            <?php endforeach ; ?>    
        </table>
    
</div>