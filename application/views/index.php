
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>HOME</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url() ?>DataChart">Home</a></li>
            <li class="breadcrumb-item active">Data Uji</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <!-- Main content -->
  <section class="content">
    <!-- NOTIFIKASI -->
    
    <!-- tambah data -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">

          <div class="card-header">
            <div class="row">
              <div class="col-md-12">
                <div><center><h2 style="font-family: sans-serif;"><b>Klasifikasi Kelayakan Keluarga Penerima Beras Rastra</b></h2></center>
                  <!-- <h5 style="font-family: sans-serif;">Memprediksi peluang di masa depan berdasarkan pengalaman dimasa sebelumnya, dengan mengambil data latih dan sebuah data uji, dengan menggunakan 6 kriteria yaitu Status PKH, Jumlah Tanggungan, Kepala rumah Tangga, Kondisi Rumah, Jumlah Penghasilan, dan Status Pemilik Rumah. Program ini digunakan untuk membantu pemerintah dalam menentukan kelayakan keluarga penerima beras Rastra.</h5> -->
                </div>

              </div>
            </div>
          </div>
          <div class="card-header">
            <div class="row">
              <div class="col-md-12">

                <div class="row">
                  <div class='col-lg-2'>
                    <br><br><br><br>
                    <div class='small-box bg-blue'>
                      <div class='inner'><h3> <center><?php echo $total ?> </center></h3><p><b><center>Total Data Training</center></b></p></div>
                      <div class='icon'><i class='fa fa-newspaper-o'></i></div>
                      <a href="<?= base_url() ?>DataTraining" class='small-box-footer'>Selengkapnya <i class='fa fa-arrow-circle-right'></i></a>
                    </div>
                  </div>
                  <div class="col-md-1">

                  </div>

                  <div class="col-sm-8">
                    <!DOCTYPE html>
                    <html>
                    <head>
                      <title>Naive Bayes</title>
                      <!-- Load file plugin Chart.js -->
                      <script src="<?php echo base_url()?>/assets/Chart.js"></script>
                    </head>
                    <body>
                      <br>
                      <h4 style="font-family: sans-serif;"><b>Grafik Status Kelayakan Penerima Beras Rastra</b></h4>
                      <canvas id="myChart"></canvas>
                      <?php
    //Inisialisasi nilai variabel awal
                      $status= "";
                      $jumlah=null;
                  // var_dump($hasil);
                      foreach ($hasil as $item)
                      {
                        $status_kelayakan=$item->status_kelayakan;
                        $status .= "'$status_kelayakan'". ", ";
                        $status_kelayakan=$item->total;
                        $jumlah .= "$status_kelayakan". ", ";
                      }

                      ?>

                      <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
          labels: [<?php echo $status; ?>],
          datasets: [{

            label:'Data kelayakan', 
            backgroundColor: ['rgb(255, 99, 132)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
            borderColor: ['rgb(255, 99, 132)'],
            data: [<?php echo $jumlah; ?>]
          }]
        }, 



        
        // Configuration options go here
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true
              }
            }]
          }
        }
      });
    </script>
  </body>
  </html>

</div>
</div>
</div>
<div>

</div>
</div>
<!-- ./card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
<!-- list data -->

<!-- /.col -->
