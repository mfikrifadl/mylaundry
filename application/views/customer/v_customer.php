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
                <h2>LIST CUSTOMER & JADWAL SELESAI LAUNDRY</h2>
            </div>
            <div class="col-sm" style="text-align:right">
                <a href="<?php echo base_url("customer/addcustomer") ?>"> <button type="button" class="btn btn-success">Tambah customer</button></a>
            </div>
        </div>
        <table class="table">
            <thead class="thead-dark" style="text-align: center">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">ID Customer</th>
                    <th scope="col">Nomor HP Customer</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Selesai Laundry</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Status</th>
                    <th scope="col">Fungsi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $i = 1;
                foreach ($customer as $customers) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $i ?></th>
                        <td><?php echo $customers->id_customer; ?></td>
                        <td><?php echo $customers->nohpcustomer; ?></td>
                        <td><?php echo $customers->nama; ?></td>
                        <td><?php echo $customers->tanggalselesai; ?></td>
                        <td><img src="<?php echo base_url("/assets/upload/$customers->foto") ?>" style="width: 6vw"></td>
                        <td><?php
                            if ($customers->status == 0) {
                                echo "On Going";
                            } else {
                                echo "Selesai";
                            }

                            ?></td>
                        <td>
                            <form action="<?php echo base_url("customer/updatecustomer") ?>" method="post">
                                <input type="hidden" name="nohpcustomer" value="<?php echo $customers->nohpcustomer ?>">
                                <a href="<?php echo base_url("customer/updatecustomer/") ?>"> <button type="submit" class="btn btn-primary">Update</button></a>
                            </form>
                            <br>
                            <form action="<?php echo base_url("customer/delcustomer") ?>" method="post">
                                <input type="hidden" name="nohpcustomer" value="<?php echo $customers->nohpcustomer ?>">
                                <a href="<?php echo base_url("customer/delcustomer/") ?>"> <button type="submit" class="btn btn-danger">Delete</button></a>
                            </form>
                        </td>
                        </td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src=".../assets/js/bootstrap.min.js"></script>
</body>

</html>