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
              <h3 class="box-title">List Data Teknisi</h3>
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
                  <th>No Telp</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>

                <?php $nomor=1 ?>
                <?php 
                 $this->db->select(
                   't.id_teknisi,
                   t.nama_teknisi,
                   t.kelamin_teknisi,
                   t.email_teknisi,
                   t.notelp_teknisi,
                   ');
                 $query = $this->db->get('teknisi as t')->result_object();
                //  var_dump($query);die;
                foreach($query as $te): ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?=$te->nama_teknisi ?></td>
                  <td><?=$te->kelamin_teknisi ?></td>  
                  <td><?=$te->email_teknisi ?></td>
                  <td><?=$te->notelp_teknisi ?></td>  
                  <td>
                    <?php echo anchor('Admin/viewEditTeknisi/' . $te->id_teknisi, '<button class="btn btn-success margin" type="button"><span class="fa fa-pencil"></span></button>'); ?>
                    <?php echo anchor('Admin/teknisiHapus/' . $te->id_teknisi, '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span></button>'); ?>
                  </td>
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
                  <th>No Telp</th>
                  <th>Keahlian</th>
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