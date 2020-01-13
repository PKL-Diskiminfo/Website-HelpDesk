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
            <form action="<?php echo base_url(). 'Admin/userAdd'; ?>" method="post" enctype="multipart/form-data" >
              <div class="box box-body">
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="nama_jabatan">Nama Lengkap</label>
                      <input class="form-control" type="text" name="nama_user">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="email_user">Email </label>
                      <input class="form-control" type="text" name="email_user">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="kelamin_user">Jenis Kelamin</label>
                      <input type="radio" name="kelamin_user" value="laki-laki">laki-laki
                      <input type="radio" name="kelamin_user" value="perempuan">perempuan
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="password_user">Password</label>
                      <input class="form-control" type="password" name="password_user">
                  </div>
                </div>    
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="id_instansi">Instansi</label>  
                      <select class="form-control select2" name="id_instansi"style="width: 100%;">
                            <option value="" disable selected>Pilih Instansi</option>
                            <?php foreach($instansi as $ins):?>
                                <option value="<?= $ins->id_instansi?>"><?= $ins->nama_instansi?></option>
                            <?php  endforeach;?>
                      </select>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="id_jabatan">Jabtan</label>  
                      <select class="form-control select2" name="id_jabatan" style="width: 100%;">
                            <option disable selected>Pilih Jabatan</option>
                            <?php foreach($jabatan as $jab):?>
                                <option value="<?= $jab->id_jabatan?>"><?= $jab->nama_jabatan?></option>
                            <?php  endforeach;?>
                      </select>
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