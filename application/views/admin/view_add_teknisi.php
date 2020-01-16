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
            <h3 class="box-title">Tambah Teknisi</h3>
            <form action="<?php echo base_url(). 'Admin/teknisiAdd'; ?>" method="post" enctype="multipart/form-data" >
              <div class="box box-body">
                <div class="col-md-7">
                  <div class="form-group">
                  <input class="hidden" type="text" name="id_teknisi">
                      <label for="nama_teknisi">Nama Lengkap</label>
                      <input class="form-control" type="text" name="nama_teknisi">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="kelamin_teknisi">Jenis Kelamin</label>
                      <input type="radio" name="kelamin_teknisi" value="Laki-laki">Laki-laki
                      <input type="radio" name="kelamin_teknisi" value="Perempuan">Perempuan
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="email_teknisi">Email</label>
                      <input class="form-control" type="text" name="email_teknisi">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="password_teknisi">Password</label>
                      <input class="form-control" type="password" name="password_teknisi">
                  </div>
                </div> 
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="notelp_teknisi">No. Telp</label>
                      <input class="form-control" type="number" name="notelp_teknisi">
                  </div>
                </div>   
                <div class="col-md-7">
                  <div class="form-group">
                      <label for="id_keahlian">Keahlian</label>  
                      <select class="form-control select2" name="id_keahlian"style="width: 100%;">
                            <option value="" disable selected>Pilih Keahlian</option>
                            <?php foreach($keahlian as $kea):?>
                                <option value="<?= $kea->id_keahlian?>"><?= $kea->nama_keahlian?></option>
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