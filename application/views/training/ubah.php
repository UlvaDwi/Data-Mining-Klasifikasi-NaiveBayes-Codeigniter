
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <div class="container-fluid">
   <div class="row mb-2">
    <div class="col-sm-6">
     <h1> Ubah Data Training</h1>
    </div>
    <div class="col-sm-6">
     <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item">Data Training</li>
      <li class="breadcrumb-item active">Ubah Data Training</li>
     </ol>
    </div>
   </div>
  </div><!-- /.container-fluid -->
 </section>
 <!-- Main content -->
 <section class="content">
  <!-- tambah data -->
  <div class="row">
   <div class="col-md-12">
    <div class="card">
     <div class="card-header">
      <h5 class="card-title">Ubah Data</h5>
     </div>
     <!-- /.card-header -->
     <div class="card-body">
      <div class="row">
       <div class="col-md-12">
        <?= validation_errors(); ?>
        <form action="" method="post" accept-charset="utf-8">

         <div class="card-body">
          <div class="row">

           <div class="col-md-5">
            <div class="form-group">
             <label for="exampleInputEmail1">id Training</label>
             <input type="text" class="form-control disabled" name="id_training" value="<?= $ubah['id_training'] ?>" readonly>
            </div>
            <div class="form-group">
             <label for="exampleInputPassword1">Nama</label>
             <input type="text" class="form-control"name="nama" value="<?= $ubah['nama'] ?>">
            </div>
            <div class="form-group">
             <label>PKH</label>
             <select class="form-control" name="pkh">
              <option <?php if($ubah['pkh']=='non'){echo "selected";}?> value='non'>Non PKH </option>
              <option <?php if($ubah['pkh']=='1'){echo "selected";}?> value='non'> PKH </option>
             </select>
            </div>
            <div class="form-group">
             <label for="exampleInputPassword1">Jumlah Tanggungan</label>
             <input type="text" class="form-control"name="jml_tanggungan" value="<?= $ubah['jml_tanggungan'] ?>">
            </div>
            <div class="form-group">
             <label>Kepala Rumah Tangga</label>
             <select class="form-control" name="kepala_rt">
              <option <?php if($ubah['kepala_rt']=='laki-laki'){echo "selected";}?> value='laki-laki'>Laki-Laki</option>
              <option <?php if($ubah['kepala_rt']=='perempuan'){echo "selected";}?> value='perempuan'>Perempuan </option>
             </select>
            </div>
           </div>

           <div class="col-md-1">
           </div>

           <div class="col-md-5">
            <div class="form-group">
             <label>Kondisi Rumah</label>
             <select class="form-control" name="kondisi_rumah">
              <option <?php if($ubah['kondisi_rumah']=='batu permanen'){echo "selected";}?> value='batu permanen'>Batu Permanen</option>
              <option <?php if($ubah['kondisi_rumah']=='bambu anyam'){echo "selected";}?> value='bambu anyam'>Bambu Anyam </option>
              <option <?php if($ubah['kondisi_rumah']=='papan'){echo "selected";}?> value='papan'>Papan </option>
             </select>
            </div>
            <div class="form-group">
             <label for="exampleInputPassword1">Jumlah Penghasilan</label>
             <input type="text" class="form-control"name="jml_penghasilan" value="<?= $ubah['jml_penghasilan'] ?>">
            </div>
            <div class="form-group">
             <label>Status Pemilik Rumah</label>
             <select class="form-control" name="status_rumah">
              <option <?php if($ubah['status_rumah']=='milik sendiri'){echo "selected";}?> value='milik sendiri'>Milik Sendiri</option>
              <option <?php if($ubah['status_rumah']=='sewa'){echo "selected";}?> value='sewa'>Sewa</option>
             </select>
            </div>
            <div class="form-group">
             <label>Status Kelayakan</label>
             <select class="form-control" name="status_kelayakan">
              <option <?php if($ubah['status_kelayakan']=='layak'){echo "selected";}?> value='layak'>Layak</option>
              <option <?php if($ubah['status_kelayakan']=='tidak layak'){echo "selected";}?> value='tidak layak'>Tidak Layak</option>
              
             </select>

            </div><br>
            <input type="submit" name="save" class="btn btn-primary" value="Update">
           </div>
          </div>






         </div>
         <!-- /.card-body -->
        </form>
       </div>
       <!-- /.col -->
      </div>
      <!-- /.row -->
     </div>
     <!-- ./card-body -->
    </div>
    <!-- /.card -->
   </div>
   <!-- /.col -->
  </div>
  <!-- /.row -->
 </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper