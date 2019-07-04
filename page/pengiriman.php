<section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pengiriman</h3>
              <a href="<?php echo BASEURL ?>?page=tambah-pengiriman" class="btn btn-success pull-right">TAMBAH  </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Supplier</th>
                  <th>Pegawai</th>
                  <th>Tanggal</th>
                  
                  <th>AKSI</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php 
                    $q="SELECT ID_PENGIRIMAN,a.TANGGAL,NM_SUP,NM_PEG FROM pengiriman a
INNER JOIN data_suplayer b on a.ID_SUP = b.ID_SUP
INNER JOIN data_pegawai c on a.ID_PEG = c.ID_PEG";
                   ?>
                <tr>
                    <?php $result2=mysqli_query($link,$q);
                      while ($data2 = mysqli_fetch_array($result2)) {
                        extract($data2);
                        // var_dump($data2);
                         # code...?>
                  <td><?php echo $NM_SUP?></td>
                  <td><?php echo $NM_PEG?></td>
                  <td><?php echo $TANGGAL ?>             </td>
                  <td> <a href="?page=det-pengiriman&id=<?php echo $ID_PENGIRIMAN ?>">Edit</a> | <a href="?page=del-pengiriman&id=<?php echo $ID_PENGIRIMAN ?>">Hapus</a></td>
                  
                </tr>
                  <?php } ?>
                
                </tbody>
                
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