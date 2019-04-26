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
            <form role="form" class="repeater">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Supplier</label>
                  <!-- <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama"> -->
                  <select class="form-control select2">
                    <option>ADIT</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal</label>
                  <input type="text" class="form-control datepicker" id="exampleInputPassword1" placeholder="">
                </div>
                <hr>
                <div data-repeater-list="group-a" class="row">
                    <div class="col-md-12">
                        <h3>BARANG</h3>
                      
                    </div>
                    
                      <div data-repeater-item class="row"> 
                        <div class="col-md-12">  
                          <div class="form-group col-md-4">
                            <label> Nama Barang</label>
                            <select class="form-control select2">
                              <option>asas</option>
                            </select>
                          </div>

                          <div class="form-group col-md-4 ">
                            <label> Jumlah Barang</label>
                              <input type="number" name="untyped-input" class="form-control " value="A"/>  
                              <!-- <input type="text" class="form-control" data-inputmask='"mask": "RPp. 999.999.9999"' data-mask>               -->
                          </div>

                          <div class="form-group col-md-4 ">
                            <label> Harga Barang</label>
                              <input name="untyped-input" class="form-control " value="A"/>                
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