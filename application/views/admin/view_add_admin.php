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
            <h3 class="box-title"> Add Jabatan</h3>
            <form action="<?php echo base_url(). 'Admin/adminAdd'; ?>" method="post" enctype="multipart/form-data" >
              <div class="box box-body">
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="nama_jabatan">Nama </label>
                      <input class="form-control" type="text" name="nama_jabatan">
                  </div>
                  <div class="form-group">
                      <label for="nama_jabatan">Email </label>
                      <input class="form-control" type="text" name="nama_jabatan">
                  </div>
                  <div class="form-group">
                      <label for="nama_jabatan">password </label>
                      <input class="form-control" type="text" name="nama_jabatan">
                  </div>
                  <div class="form-group">
                      <label for="nama_jabatan">Jenis Kelamin </label><br>
                      <input  type="radio" name="" value="">Laki-laki
                      <input  type="radio" name="" value="">Perempuan
                  </div>
                  <div class="form-group">
                      <label for="">Upload </label><br>
                      <input  type="file" name="">
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