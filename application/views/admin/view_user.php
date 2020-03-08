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
              <h3 class="box-title">List Data User</h3>
            </div>
             <!-- FLASH DATA PEMBERITAHUAN -->
             <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                    <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
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

                </tr>
                </thead>
                <tbody>

                <?php $nomor=1 ?>
                <?php 
                 $this->db->select(
                   'u.nama_user,
                   u.kelamin_user,
                   u.email_user,
                   i.nama_instansi,
                   ');
                 $this->db->join('instansi  as i','i.id_instansi = u.id_instansi', 'left');
                 $query = $this->db->get('user as u')->result_object();
                //  var_dump($query);die;
                foreach($query as $us): ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?=$us->nama_user ?></td>
                  <td><?=$us->kelamin_user ?></td>  
                  <td><?=$us->email_user ?></td>  
                  <td><?=$us->nama_instansi ?></td>        
                </tr> 
                <?php $nomor++; ?>
                <?php endforeach; ?>
                </tbody>
                <!-- <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Jenis Kelamin</th>
                  <th>Email</th>
                  <th>Instansi</th>
                  <th>Jabatan</th>
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