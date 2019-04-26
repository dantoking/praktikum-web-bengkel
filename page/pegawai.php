<section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pegawai</h3>
              <a href="<?php echo BASEURL ?>?page=tambah-pegawai" class="btn btn-success pull-right">TAMBAH  </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>AKSI</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php 
     
    $result=mysqli_query($link,"SELECT * from data_pegawai");
    $no = 1; // Untuk penomoran tabel, di awal set dengan 1
    while($data = mysqli_fetch_array($result)){ // Ambil semua data dari hasil eksekusi $sql

                   ?>
                <tr>
                  <td><?php echo $data['NM_PEG'] ?></td>
                  <td><?php echo $data['ALMT_PEG'] ?></td>
                  
                  <td> <a href="<?php echo BASEURL ?>?page=tambah-pegawai&id=<?php echo $data['ID_PEG'] ?>">Edit</a> | <a href="?page=del-pegawai&id=<?php echo $data['ID_PEG'] ?>">Hapus</a></td>
                  
                  
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>