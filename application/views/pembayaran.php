<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents())
                {
                    foreach ($keranjang as $items)
                    {
                        $grand_total = $grand_total + $items['subtotal'];
                    }
                    echo "<h5>Total Pembayaran Kamu Adalah: Rp. ".number_format($grand_total, 0,',','.');
                 ?>
            </div>

            <h3 class="mt-3">Input Pesanan Dan Pembayaran</h3>

            <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                    
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
                    <label>User ID</label>
                    <input type="text" name="user_id" placeholder="Masukkan User ID Game Kamu" class="form-control">
                </div>

                <div class="form-group">
                    <label>ID Server</label>
                    <input type="text" name="id_server" placeholder="Masukkan ID Server Game Kamu" class="form-control">
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Masukkan Email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Metode Pembayaran</label>
                    <select class="form-control">
                        <option>GoPay Token - XXXXXXXX</option>
                        <option>DANA - XXXXXXXX</option>
                        <option>OVO - XXXXXXXX</option>
                        <option>ShopeePay - XXXXXXXX</option>
                        <option>BCA Virtual Account - XXXXXXXXXXX</option>
                        <option>BRI Virtual Account - XXXXXXXXXXX</option>
                        <option>BNI Virtual Account - XXXXXXXXXXX</option>
                        <option>Mandiri Virtual Account - XXXXXXXXXXX</option>
                        <option>Indomaret / Ceriamart - XXXXXXXXXXX</option>
                        <option>Alfamart / Alfamidi - XXXXXXXXXXX</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Bayar</button>

            </form>
            
            <?php
            }else{
                echo"Tidak Ada Pesanan";
            }
            ?>
            <a href="<?php echo base_url('dashboard/hapus_keranjang')?>"><div">Kembali ke Dashboard</div></a>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>