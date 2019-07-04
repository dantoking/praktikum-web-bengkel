<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Pengiriman</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php 
            error_reporting(0);
              $id= $_GET['id'];

 $result=mysqli_query($link,"SELECT * from data_transaksi where ID_PEG ='$id'");
 $data = mysqli_fetch_array($result);
             ?>
            <form role="form" class="repeater" action="page/ins-pengiriman.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <input type="hidden" name="id" >  
                  <label for="exampleInputEmail1">Supplier</label>
                  <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama"> -->
                  <select class="form-control select2" name="sup">
                    <?php $result2=mysqli_query($link,"SELECT * from data_suplayer ");
                      while ($data2 = mysqli_fetch_array($result2)) {
                         # code...?>
                       
                    <option value="<?php echo $data2['ID_SUP'] ?>" ><?php echo $data2['NM_SUP'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <input type="hidden" name="id" >
                  <label for="exampleInputEmail1">Pegawai</label>
                  <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama"> -->
                  <select class="form-control select2" name="peg">
                    <?php $result2=mysqli_query($link,"SELECT * from data_pegawai ");
                      while ($data2 = mysqli_fetch_array($result2)) {
                         # code...?>
                       
                    <option value="<?php echo $data2['ID_PEG'] ?>" ><?php echo $data2['NM_PEG'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal</label>
                  <input type="text" class="form-control datepicker" id="exampleInputPassword1" placeholder="" name="tgl">
                </div>
                <hr>
                <div data-repeater-list="group" class="row">
                    <div class="col-md-12">
                        <h3>BARANG</h3>
                      
                    </div>
                    
                      <div data-repeater-item class="row"> 
                        <div class="col-md-12">  
                          <div class="form-group col-md-4">
                            <label> Nama Barang</label>
                            <select class="form-control " name="kd_barang">
                              <?php $result2=mysqli_query($link,"SELECT * from data_barang ");
                      while ($data2 = mysqli_fetch_array($result2)) {
                         # code...?>
                       
                    <option value="<?php echo $data2['KD_BARANG'] ?>" ><?php echo $data2['NM_BARANG'] ?></option>
                    <?php } ?>
                            </select>
                          </div>

                          <div class="form-group col-md-4 ">
                            <label> Jumlah Barang</label>
                              <input type="number"  class="form-control " value="1" name="jumlah" />  
                              <!-- <input type="text" class="form-control" data-inputmask='"mask": "RPp. 999.999.9999"' data-mask>               -->
                          </div>

                          <div class="form-group col-md-4 ">
                            <label> Harga Barang</label>
                              <input name="harga" class="form-control " value="0" name="harga"  />                
                          </div>
                        
                        <div class="col-md-4">
                  
                        <input data-repeater-delete type="button" class="btn btn-danger" value="Delete"/>
                          
                        </div>
                      </div>  
                    </div>
                    
                    
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <hr>
                      <input data-repeater-create type="button" class="btn btn-primary" value="Add"/>
                    </div>
                  </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">Tambah</button>
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