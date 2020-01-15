<!-- Content Wrapper. Contains page content -->
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
      <div class="col-md-8">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title"> Add Instansi</h3>
            <form action="<?php echo base_url("Admin/instansiEdit/$instansi->id_instansi") ?>" method="post" enctype="multipart/form-data" >
              <div class="box box-body">
              <input type="hidden" name="id_instansi" value="<?php echo $instansi->id_instansi ?>" />

                <div class="col-md-7">
                  <div class="form-group">
                      <label for="nama_instansi">Nama Instansi</label>
                      <input class="form-control" type="text" name="nama_instansi" value="<?php echo $instansi->nama_instansi ?>">
                  </div>
                </div>  
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="alamat_instansi">Alamat Instansi</label>
                      <textarea  name="alamat_instansi" class="form-control"  rows="3" placeholder=""><?php echo $instansi->alamat_instansi ?></textarea>
                  </div>
                </div>  
                <div class="col-md-7">  
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </div>
            </form>
          </div>
        </div>  
        </div>
      </div>
    </section>
 
 </div>   