<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('/assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <title>Home Laundry</title>
</head>

<body style="background-image: url( <?php echo base_url("/assets/batik.jpg") ?>); height:100%;">
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

    <div class="container-lg" style="margin-top: 2vw">
        <div style="background-color: #D6D6D6; padding:10vw; border-radius:10px; margin-bottom:2vw; text-align:center;">
            <h1>SI LAUNDRY INDUSTRI</h1>
            <h5>Sistem Informasi Laundry</h5>
            <h5>dibuat oleh Aisyah Jihan</h5>
	    <h5>mempermudah dalam melakukan laundry industri kiloan</h5>
        </div>

        <div class="row" style="text-align:center">
            <div class="col-sm">
                <div style="background-color: #D6D6D6; padding:2vw; border-radius:10px; margin-bottom:2vw">
                    <!-- <h1 style="text-align: center">Info Customer</h1> -->
                    <a href="<?php echo base_url("customer/listcustomer") ?>"> <button type="button" class="btn btn-success">Info Customer</button></a>
                </div>
            </div>
            <div class="col-sm">
                <div style="background-color: #D6D6D6; padding:2vw; border-radius:10px; margin-bottom:2vw">
                    <!-- <h1 style="text-align: center">Info Cabang</h1> -->
                    <a href="<?php echo base_url("cabang/listcabang") ?>"> <button type="button" class="btn btn-success">Info Cabang</button></a>
                </div>
            </div>
            <div class="col-sm">
                <div style="background-color: #D6D6D6; padding:2vw; border-radius:10px; margin-bottom:2vw">
                    <!-- <h1 style="text-align: center">Info Transaksi</h1> -->
                    <a href="<?php echo base_url("transaksi/listTransaksi") ?>"> <button type="button" class="btn btn-success">Info Transaksi</button></a>
                </div>
            </div>
            <div class="col-sm">
                <div style="background-color: #D6D6D6; padding:2vw; border-radius:10px; margin-bottom:2vw">
                    <!-- <h1 style="text-align: center">Info Grafik Transaksi</h1> -->
                    <a href="<?php echo base_url("grafik/listgrafik") ?>"> <button type="button" class="btn btn-success">Grafik Transaksi</button></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>