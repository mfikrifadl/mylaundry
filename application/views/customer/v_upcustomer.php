<body style="background-image: url( <?php echo base_url("/assets/batik.jpg") ?>); height:100%;">
    <div>
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


        <div class="container-lg bg-light" style="margin-top: 2vw; padding:2vw; border-radius:1vw ; ">
            <h3 style="margin-bottom: 2vw">Update Customer</h3>
            <?php
            foreach ($customerone as $customersatu) {
            ?>
                <form action="<?php echo base_url("customer/updatecustomer") ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="inNP">Nomor HP Customer</label>
                        <input type="number" class="form-control" name="nohpcustomerreal" placeholder="Nomor HP Customer" value="<?php echo $customersatu->nohpcustomer ?>" hidden>
                        <input type="number" class="form-control" name="nohpcustomer2" placeholder="Nomor HP Customer" value="<?php echo $customersatu->nohpcustomer ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="inNama">Nama Customer</label>
                        <input type="text" class="form-control" name="namacustomer" placeholder="Nama Customer" value="<?php echo $customersatu->nama ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="inTGL">Tanggal Selesai Laundry</label>
                        <input type="date" class="form-control" name="tanggalselesai" value="<?php echo $customersatu->tanggalselesai ?>" required>
                    </div>

                    <?php
                    if ($customersatu->status == 0) {
                    ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status1" value="0" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                On Going
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status2" value="1">
                            <label class="form-check-label" for="exampleRadios2">
                                Selesai
                            </label>
                        </div>
                    <?php
                    }
                    ?>
                    <?php
                    if ($customersatu->status == 1) {
                    ?>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status1" value="0">
                            <label class="form-check-label" for="exampleRadios1">
                                On Going
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="status2" value="1" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                Selesai
                            </label>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <label for="inFile">Upload Foto</label>
                        <input type="file" class="form-control-file" name="foto" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            <?php
            }
            ?>
        </div>
        <script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
    </div>
</body>

</html>