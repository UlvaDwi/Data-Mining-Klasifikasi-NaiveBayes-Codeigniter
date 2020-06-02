<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Uji</h1>
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
    <?php 
    if ($this->session->flashdata('flash_uji')){ ?>
      <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h6>
          <i class="icon fas fa-check"></i> 
          Data Berhasil 
          <strong>
            <?= $this->session->flashdata('flash_uji');   ?>
          </strong> 
        </h6>
      </div>
    <?php } ?>
    <!-- tambah data -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Tambah Data</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <?= validation_errors(); ?>
                <form action="<?= base_url() ?>DataUji/hitung" method="post" accept-charset="utf-8">
                  <div class="card-body">
                    <div class="row">

                      <div class="col-md-5">
                        <div class="form-group">
                          <label for="exampleInputPassword1">Nama Penduduk</label>
                          <input type="text" class="form-control" id="exampleInputPassword1" name="nama">
                        </div>
                        <div class="form-group">
                          <label>PKH</label>
                          <select class="form-control" name="pkh">
                           <option>--pilih status PKH--</option>
                           <option value="non">Non PKH</option>
                           <option value="1">PKH</option>
                         </select>
                       </div>
                       <div class="form-group">
                        <label>Jumlah Tanggungan</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="jml_tanggungan">
                      </div>
                      <div class="form-group">
                        <label>Kepala Rumah Tangga</label>
                        <select class="form-control" name="kepala_rt">
                         <option>--pilih kepala rumah Tangga--</option>
                         <option value="laki-laki">Laki-laki</option>
                         <option value="perempuan">Perempuan</option>
                       </select>
                     </div>
                   </div>


                   <div class="col-md-1">
                   </div>

                   <div class="col-md-5">
                     <div class="form-group">

                      <label>Kondisi Rumah</label>
                      <select class="form-control" name="kondisi_rumah">
                        <option>--pilih kondisi rumah--</option>
                        <option value="batu permanen">Batu Permanen</option>
                        <option value="bambu anyam">Bambu Anyam</option>
                        <option value="papan">Papan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Jumlah Penghasilan</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="jml_penghasilan">

                    </div>
                    <div class="form-group">
                      <label>Status Pemilik Rumah</label>
                      <select class="form-control" name="status_rumah">
                        <option>--pilih status pemilik rumah--</option>
                        <option value="milik sendiri">Milik Sendiri</option>
                        <option value="sewa">Sewa</option>
                      </select>
                      <br>
                      <input type="submit" name="save" class="btn btn-primary" value="Hitung">
                    </div>
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
<!-- list data -->
<div class="row">
  <div class="col-12">
    <div class="card">
      <!-- card-body -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Id Training</th>
              <th>Nama</th>
              <th>PKH</th>
              <th>Jumlah Tanggungan</th>
              <th>Kepala Rumah Tangga</th>
              <th>Kondisi Rumah</th>
              <th>Jumlah Penghasilan</th>
              <th>Status Pemilik Rumah</th>
              <th>Status Kelayakan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no=1;
            foreach ($training as $row){ ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $row->id_training ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->pkh ?></td>
                <td><?= $row->jml_tanggungan ?></td>
                <td><?= $row->kepala_rt ?></td>
                <td><?= $row->kondisi_rumah ?></td>
                <td><?= $row->jml_penghasilan ?></td>
                <td><?= $row->status_rumah ?></td>
                <td><?= $row->status_kelayakan ?></td>


                <td>
                  <div class="btn-group">
                    <a href="<?= base_url() ?>DataUji/hapus/<?= $row->id_training ?>" class="btn btn-danger" onclick="return confirm('yakin ?')">Hapus</a>
                    <a href="<?= base_url() ?>DataUji/ubah/<?= $row->id_training ?>" class="btn btn-warning">Update</a>
                  </div>
                </td>
              </tr>
              <?php 
              $no++;
            } 
            ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>



<!-- Modal -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hasil Perhitungan </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo $this->session->flashdata('flash_hitung'); ?>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

