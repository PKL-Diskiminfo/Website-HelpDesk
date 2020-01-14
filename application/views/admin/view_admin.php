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
            <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Admin</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Admin</th>
                  <th>Email</th>
                  <th>Jenis Kelamin</th>
                  <th>Foto</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomor=1 ?>
                        <?php foreach($admin as $adm): ?>
                            <tr>
                                <td><?php echo $nomor?></td>
                                <td><?= $adm->nama_admin?></td>
                                <td><?= $adm->email_admin?></td>
                                <td><?= $adm->kelamin_admin?></td>
                                <td>
                                  <img src="<?php echo base_url('foto/admin/' . $adm->foto_admin) ?>" width="64"/>
                                </td>
                                <td></td>
                            </tr>
                        <?php $nomor++ ?>    
                        <?php endforeach;?>
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Instansi</th>
                  <th>Alamat Insransi</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            </div>
        </div>
    </section>

 </div> 