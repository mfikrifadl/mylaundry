<body style="background-image: url( <?php echo base_url("/assets/batik.jpg") ?>); height:100%;"  >
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <span class="navbar-brand mb-0 h1" style="margin-left: 10vw">SI LAUNDRY INDUSTRI</span>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url() ?>">Home Laundry<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("cabang/listcabang") ?>">cabang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("customer/listcustomer") ?>">customer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url("transaksi/listTransaksi") ?>">Transaksi</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-lg bg-light" style="margin-top: 2vw; padding:2vw; border-radius:1vw ;">
        <h3 style="margin-bottom: 2vw">Tambah customer</h3>
        <form action="<?php echo base_url("customer/addcustomer") ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inNP">Nomor HP customer</label>
                <input type="number" class="form-control" name="nohpcustomer" placeholder="Nomor HP Customer" required>
            </div>
            <div class="form-group">
                <label for="inNama">Nama customer</label>
                <input type="text" class="form-control" name="namacustomer" placeholder="Nama Customer" required>
            </div>
            <div class="form-group">
                <label for="inTGL">Tanggal Selesai Laundry</label>
                <input type="date" class="form-control" name="tanggalselesai" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="status" value="0" hidden>
            </div>
            <div class="form-group">
                <label for="inFile">Upload Foto</label>
                <input type="file" class="form-control-file" name="foto" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
</body>

</html>