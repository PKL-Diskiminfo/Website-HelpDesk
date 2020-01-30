<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <section class="content">
        <div class="row">
          <div class="col-md-10">
            <div class="box box-success">
              <div class="box-header with-border">
                <h3 class="box-title">Form Ticketing</h3>
                  <form action="<?php echo site_url('dashboard/addKeluhan');?>" method="POST">
                  <div class="box box-body">
                    <div class="form-group">
                      <label for="input1">Judul Ticket:</label>
                      <input type="text" class="form-control" id="input1" name="judul_ticket">
                    </div>
                        <!-- Date -->
                        <div class="form-group">
                          <label for="tanggal_rusak">Tanggal Kerusakan</label>

                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" class="form-control pull-right"  name="tanggal_rusak">
                          </div>
                          </div>
                    <div class="form-group">
                      <label>Deskripsi:</label>
                      <textarea id="editor1" name="deskripsi"></textarea>
                    </div>
                    <div class="container">
                    <button type="submit" class="btn btn-primary">Submit</button>                              
                  </div>
                  
                 </form> 
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
 