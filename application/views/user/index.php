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
                    <div class="form-group">
                      <label>Deskripsi:</label>
                      <textarea id="editor1" name="deskripsi"></textarea>
                    </div>
                    <div class="container">
    <div class="col-sm-6" style="height:130px;">
        <div class="form-group">
            <div class='input-group date' id='datetimepicker8'>
                <input type='text' class="form-control" />
                <span class="input-group-addon">
                    <span class="fa fa-calendar">
                    <script src="<?php echo base_url('date.js'); ?>"></script>
                    </span>
                </span>
            </div>
        </div>
    </div>
</div>
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
 