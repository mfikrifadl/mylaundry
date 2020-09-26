<body style="background-image: url( <?php echo base_url("/assets/batik.jpg") ?>); height:100%;"  >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand mb-0 h1" style="margin-left: 10vw">SI LAUNDRY INDUSTRI</span>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url() ?>">Home Laundry<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("cabang/listcabang") ?>">Cabang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("customer/listcustomer") ?>">Customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("transaksi/listTransaksi") ?>">Transaksi</a>
                </li>
		        <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("grafik/listgrafik") ?>">Grafik</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-lg bg-light" style="margin-top: 2vw; padding:2vw; border-radius:1vw ;">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-sm">
                <h2>LIST TRANSAKSI</h2>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark" style="text-align: center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">ID Cabang</th>
                    <th scope="col">ID Customer</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Tipe Laundry</th>
                    <th scope="col">Harga Laundry</th>
                    <th scope="col">Status Transaksi</th>
		            
                    <th scope="col">Fungsi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $i = 1;
                foreach ($trans as $a) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $a->id_transaksi; ?></td>
                        <td><?php echo $a->id_cabang; ?></td>
                        <td><?php echo $a->id_customer; ?></td>
                        <td><?php echo $a->tanggal; ?></td>
			            <td><?php echo $a->tipelaundry; ?></td>
			            <td><?php echo $a->harga; ?></td>
                        <?php
                        if ($a->status == 0) {
                        ?>
                            <td>
                                On Going
                            </td>
                            <td style="text-align: center">
                                <form action="<?php echo base_url("transaksi/kembalikanCabang") ?>" method="post">
                                    <input type="hidden" name="id_transaksi" value="<?php echo $a->id_transaksi ?>">
                                    <a href="<?php echo base_url("transaksi/kembalikanCabang") ?>"> <button type="submit" class="btn btn-primary">Selesaikan</button></a>
                                </form>
                            </td>

                        <?php
                        } else {
                        ?>
                            <td>
                                Selesai
                            </td>
                            <td style="text-align: center">
                                <form action="<?php echo base_url("transaksi/delTrans") ?>" method="post">
                                    <input type="hidden" name="id_transaksi" value="<?php echo $a->id_transaksi ?>">
                                    <a href="<?php echo base_url("transaksi/delTrans") ?>"> <button type="submit" class="btn btn-danger">Delete</button></a>
                                </form>
                            </td>
                        <?php
                        }
                        ?>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="<?php echo base_url('/assets/js/bootstrap.min.js') ?>"></script>
    


</body>

</html>