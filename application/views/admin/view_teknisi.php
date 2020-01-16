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
                  <th>Keahlian</th>

                </tr>
                </thead>
                <tbody>

                <?php $nomor=1 ?>
                <?php 
                 $this->db->select(
                   't.nama_teknisi,
                   t.kelamin_teknisi,
                   t.email_teknisi,
                   t.notelp_teknisi,
                   k.nama_keahlian
                   ');
                 $this->db->join('keahlian as k','k.id_keahlian = t.id_keahlian', 'left');
                 $query = $this->db->get('teknisi as t')->result_object();
                //  var_dump($query);die;
                foreach($query as $te): ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?=$te->nama_teknisi ?></td>
                  <td><?=$te->kelamin_teknisi ?></td>  
                  <td><?=$te->email_teknisi ?></td>
                  <td><?=$te->notelp_teknisi ?></td>  
                  <td><?=$te->nama_keahlian ?></td>
                  <td>
                    <?php echo anchor('Admin/teknisiEdit/' . $te->id_teknisi, '<button class="btn btn-success margin" type="button"><span class="fa fa-pencil"></span></button>'); ?>
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