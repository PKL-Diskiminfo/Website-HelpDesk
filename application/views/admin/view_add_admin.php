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
            <h3 class="box-title"> Tambah Data Admin</h3>
      

            <form action="<?php echo base_url(). 'Admin/adminAdd'; ?>" method="post" enctype="multipart/form-data" >
              <div class="box box-body">
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="nama_admin">Nama </label>
                      <input class="form-control" type="text" name="nama_admin">
                  </div>
                  <div class="form-group">
                      <label for="email_admin">Email</label>
                      <input class="form-control" type="text" name="email_admin">
                  </div>
                  <div class="form-group">
                      <label for="password_admin">Password</label>
                      <input class="form-control" type="password" name="password_admin">
                  </div>
                  <div class="form-group">
                      <label for="kelamin_admin">Jenis Kelamin</label><br>
                      <input  type="radio" name="kelamin_admin" value="Laki-laki">Laki-laki
                      <input  type="radio" name="kelamin_admin" value="Perempuan">Perempuan
                  </div>
                  <div class="form-group">
                      <label for="foto_admin">Upload</label><br>
                      <input  type="file" name="foto_admin">
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