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
        <form action="<?php echo base_url("cabang/addcabang") ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="innama">nama</label>
                <input type="text" class="form-control" name="namacabang" placeholder="Nama Cabang" required>
            </div>
            <div class="form-group">
                <label for="inlokasi">lokasi</label>
                <input type="text" class="form-control" name="lokasi" placeholder="Lokasi Cabang" required>
            </div>
            <div class="form-group">
                <label for="inpemilik">pemilik</label>
                <input type="text" class="form-control" name="pemilik" placeholder="Pemilik Cabang" required>
            </div>
            <div class="form-group">
                <label for="inNP">Tahun</label>
                <input type="number" class="form-control" min="1000" max="2020" name="tahun" placeholder="Tahun Berdiri" required>
            </div>
            <div class="form-group">
                <label for="inNP">mesincuci</label>
                <input type="number" class="form-control" name="mesincuci" placeholder="Mesin Cuci Total" required>
            </div>
            <div class="form-group">
                <input type="number" class="form-control" name="status" value="0" hidden>
            </div>
            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
</body>

</html>