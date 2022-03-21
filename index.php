<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas CRUD</title>
    <link rel="stylesheet" href="style/style.css">
    <!-- ===import cdn=========== -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<?php 
 include("halaman/navbar.php");
 ?>
 <!-- class wajib -->
    <div class="hero">
        <div class="txt">
            <!-- data -->
            
            <!-- tutup data -->
        <div id="wrapper d-flex">
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header fs-4">Diinggo DBMS</h1>
            </div>
    
</div>
</div>

</div>
<div class="d-flex justify-content-start" >
<?php
 include("sql/koneksi.php");
 $data_barang = mysqli_query($koneksi,"SELECT * FROM produk");
 $data_pelanggan = mysqli_query($koneksi,"SELECT * FROM pelanggan");
 $data_penjualan = mysqli_query($koneksi,"SELECT * FROM penjualan");
 
// menghitung data barang
$jumlah_barang = mysqli_num_rows($data_barang);
$jml_pelanggan = mysqli_num_rows($data_pelanggan);
$jml_penjualan = mysqli_num_rows($data_penjualan);
 ?>
<div class="card text-white bg-info border-none mx-20" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Jumlah Barang</h5>
    <p class="card-text text-white"><?php echo $jumlah_barang; ?> product</p>
    <a href="databarang.php?nama=" class="btn btn-primary">Lihat Details</a>
  </div>
  <div class="card text-white bg-info" style="width: 18rem;">

</div>
</div>
<div class="card text-white bg-success border-none" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Jumlah Pelanggan</h5>
    <p class="card-text text-white"><?php echo $jml_pelanggan; ?> product</p>
    <a href="datapelanggan.php?nama=" class="btn btn-primary">Lihat Details</a>
  </div>
  <div class="card text-white bg-info" style="width: 18rem;">

</div>
</div>
<div class="card text-white bg-danger border-none" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Jumlah Penjualan</h5>
    <p class="card-text text-white"><?php echo $jml_penjualan; ?> product</p>
    <a href="datapenjualan.php?nama=" class="btn btn-primary">Lihat Details</a>
  </div>
  <div class="card text-white bg-info" style="width: 18rem;">
  </div>

</div>
</div>
<div class="panel" style="margin-top: 20px;">
    <div id="chartInt"></div>
</div>
</div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chartInt', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Tahunan'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'jumlah kenaikan'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Pelanggan',
        data: [2,3,5,6,7,8,9,10,11,12,100,20]

    }, {
        name: 'Penjualan',
        data: [1,2,3,4,5,6,7,8,9,10,11,12]

    }, {
        name: 'Barang',
        data: [1,2,4,5,89,8,7,8,1,2,45,]

    }]
});
</script>
    <script src="app/script.js"></script>
</body>
</html>