<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <?php 


// require '../conn.php';


// var_dump($_GET);
error_reporting(0);
$id= $_GET['id'];

 $result=mysqli_query($link,"SELECT * from data_pegawai where ID_PEG ='$id'");
 $data = mysqli_fetch_array($result);
 // var_dump($data);
           ?>
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  method="POST" action="page/ins-pegawai.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="hidden" name="id" value="<?php echo $id ?>">
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama" value="<?php echo $data['NM_PEG'] ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" name="alamat" id="exampleInputPassword1" placeholder="Alamat" value="<?php echo $data['ALMT_PEG'] ?>">
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
          
          <!-- /.box -->

          
          <!-- /.box -->

          <!-- Input addon -->
          
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
      </div>
      <!-- /.row -->
    </section>


    <?php 
      // var_dump($_POST);
     ?>