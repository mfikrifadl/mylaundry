<body style="background-image: url( <?php echo base_url("/assets/batik.jpg") ?>); height:100%;" >
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
                <h2>LIST CABANG</h2>
            </div>
            <div class="col-sm" style="text-align:right">
                <a href="<?php echo base_url("cabang/addcabang") ?>"> <button type="button" class="btn btn-success">Tambah Cabang</button></a>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark" style="text-align: center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID cabang</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Pemilik</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Mesin Cuci</th>
                    <th scope="col">Status</th>
                    <th scope="col">Fungsi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $i = 1;
                foreach ($cabang as $cabangs) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $cabangs->id_cabang; ?></td>
                        <td><?php echo $cabangs->nama; ?></td>
                        <td><?php echo $cabangs->lokasi; ?></td>
                        <td><?php echo $cabangs->pemilik; ?></td>
                        <td><?php echo $cabangs->tahun; ?></td>
                        <td><?php echo $cabangs->mesincuci; ?></td>
                        <?php
                        if ($cabangs->status == 0) {
                        ?>
                            <td>
                                Tersedia
                            </td>
                            <td>
                                <form action="<?php echo base_url("cabang/updatecabang") ?>" method="post">
                                    <input type="hidden" name="id_cabang" value="<?php echo $cabangs->id_cabang ?>">
                                    <a href="<?php echo base_url("cabang/updatecabang/") ?>"> <button type="submit" class="btn btn-primary">Update</button></a>
                                </form>
                                <br>
                                <form action="<?php echo base_url("cabang/delcabang") ?>" method="post">
                                    <input type="hidden" name="id_cabang" value="<?php echo $cabangs->id_cabang ?>">
                                    <a href="<?php echo base_url("cabang/delcabang/") ?>"> <button type="submit" class="btn btn-danger">Delete</button></a>
                                </form>
                                <br>
                                <form action="<?php echo base_url("transaksi/addTransaksi") ?>" method="post">
                                    <input type="hidden" name="id_cabang" value="<?php echo $cabangs->id_cabang ?>">
                                    <a href="<?php echo base_url("transaksi/addTransaksi") ?>"> <button type="submit" class="btn btn-info">Order</button></a>
                                </form>
                            </td>
                        <?php
                        } else {
                        ?>
                            <td>
                                Full
                            </td>
                            <td>
                                Sedang Full Order
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