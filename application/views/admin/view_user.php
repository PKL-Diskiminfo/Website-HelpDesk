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
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Email</th>
                  <th>Instansi</th>
                  <th>Jabatan</th>

                </tr>
                </thead>
                <tbody>

                <?php $nomor=1 ?>
                <?php 
                                
                foreach($user as $us): ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?=$us->nama_user ?></td>
                  <td><?=$us->kelamin_user ?></td>  
                  <td><?=$us->email_user ?></td>  
                  <td>null</td>
                  <td>null</td>
        
                </tr> 
                <?php $nomor++; ?>
                <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Email</th>
                  <th>Instansi</th>
                  <th>Jabatan</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            </div>
        </div>
    </section>

 </div> 