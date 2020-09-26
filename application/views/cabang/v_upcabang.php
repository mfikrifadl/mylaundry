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
        <h3 style="margin-bottom: 2vw">Update Cabang</h3>
        <?php
        foreach ($cabangone as $cabangsatu) {
        ?>
            <form action="<?php echo base_url("cabang/updatecabang") ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="innama">ID cabang</label>
                    <input type="number" class="form-control" name="id_cabang2" value="<?php echo $cabangsatu->id_cabang ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="innama">Nama</label>
                    <input type="text" class="form-control" name="namacabang" placeholder="Nama Cabang" value="<?php echo $cabangsatu->nama ?>" required>
                </div>
                <div class="form-group">
                    <label for="inlokasi">Lokasi</label>
                    <input type="text" class="form-control" name="lokasi" placeholder="Lokasi Cabang" value="<?php echo $cabangsatu->lokasi ?>" required>
                </div>
                <div class="form-group">
                    <label for="inpemilik">Pemilik</label>
                    <input type="text" class="form-control" name="pemilik" placeholder="Pemilik Cabang" value="<?php echo $cabangsatu->pemilik ?>" required>
                </div>
                <div class="form-group">
                    <label for="inTahun">Tahun</label>
                    <input type="number" class="form-control" min="1000" max="2020" name="tahun" placeholder="Tahun Berdiri" value="<?php echo $cabangsatu->tahun ?>" required>
                </div>
                <div class="form-group">
                    <label for="inmesincuci">Total Mesin cuci</label>
                    <input type="number" class="form-control" name="mesincuci" placeholder="Total Mesin Cuci" value="<?php echo $cabangsatu->mesincuci ?>" required>
                </div>
                <?php
                if ($cabangsatu->status == 0) {
                ?>
                    <div class="form-group">
                        <label for="inpemilik">Status Cabang</label>
                        <input type="text" class="form-control" value="Tersedia" readonly>
                        <input type="number" class="form-control" name="status" value="0" hidden>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($cabangsatu->status == 1) {
                ?>
                    <div class="form-group">
                        <label for="inpemilik">Status Cabang</label>
                        <input type="text" class="form-control" value="Full" readonly>
                        <input type="number" class="form-control" name="status" value="1" hidden>
                    </div>
                <?php
                }
                ?>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        <?php
        }
        ?>
    </div>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
</body>

</html>