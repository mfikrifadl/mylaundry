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
        <h3 style="margin-bottom: 2vw">Tambah cabang</h3>
        <form action="<?php echo base_url("transaksi/addTransaksi") ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="inJudul">ID_cabang</label>
                <input type="number" class="form-control" name="id_cabang2" value="<?php echo $cabangs ?>" readonly>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Daftar ID Customer</label>
                <select class="form-control" name="id_customer" required>
                    <?php
                    foreach ($customer as $customers) {
                        if ($customers->status != 1) {
                    ?>
                            <option value="<?php echo $customers->id_customer ?>"><?php echo $customers->nama ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
                <small id="emailHelp" class="form-text text-muted">Jika customer Tidak Ada, Maka customer telah Selesai</small>
            </div>

            <div class="form-group">
                <label for="inPenulis">Tanggal Transaksi</label>
                <input type="date" class="form-control" name="tgltrans" placeholder="Tanggal Transaksi" required>
            </div>

	        <div class="form-group">
                <label for="inHarga">Harga Laundry</label>
                <input type="number" class="form-control" name="harga" placeholder="Harga Laundry" required>
            </div>

            <div class="form-group">
                <label for="inTipe">Tipe Laundry</label>
                <input type="text" class="form-control" name="tipelaundry" placeholder="Tipe Laundry" required>
            </div>

            <!-- STATUS -->
            <div class="form-group">
                <input type="number" class="form-control" name="status" value="0" hidden>
            </div>

            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
</body>

</html>