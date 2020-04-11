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
            <h3 class="box-title"> Tambah Teknisi</h3>
            <form action="<?php echo base_url("Admin/teknisiEdit/$teknisi->id_teknisi") ?>" method="post" enctype="multipart/form-data">
              <div class="box box-body">
              <input type="hidden" name="id_teknisi" value="<?php echo $teknisi->id_teknisi ?>" />
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="nama_teknisi">Nama Teknisi</label>
                      <input class="form-control" type="text" name="nama_teknisi" value="<?php echo $teknisi->nama_teknisi?>">
                  </div>
                </div>  
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="email_teknisi">Email</label>
                      <input class="form-control" type="text" name="email_teknisi" value="<?php echo $teknisi->email_teknisi?>">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="kelamin_teknisi">Jenis Kelamin</label>
                      <input type="radio" name="kelamin_teknisi" value="Laki-laki"<?php echo ($teknisi->kelamin_teknisi == 'Laki-laki' ? 'checked ' : '');?>>Laki-laki
                      <input type="radio" name="kelamin_teknisi" value="Perempuan"<?php echo ($teknisi->kelamin_teknisi == 'Perempuan' ? 'checked ' : '');?>>Perempuan
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="notelp_teknisi">No.Telp Teknisi</label>
                      <input class="form-control" type="text" name="notelp_teknisi" value="<?php echo $teknisi->notelp_teknisi?>">
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