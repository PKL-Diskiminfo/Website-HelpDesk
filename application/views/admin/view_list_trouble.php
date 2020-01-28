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
                  <th>Tanggal</th>
                  <th>Nomer Ticket</th>
                  <th>Nama Lengkap</th>
                  <th>Instansi</th>
                  <th>Deskripsi</th>
                  <th>Status</th>
                  <th>Balasan</th>

                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $nomor=1 ?>
                <?php 
                 $this->db->select(
                  't.id_ticket,
                   t.no_ticket,
                   t.update_at,
                   u.nama_user,
                   i.nama_instansi,
                   t.deskripsi ,
                   t.balasan,
                   t.status

                   ');
                 $this->db->join('user as u','u.id_user = t.id_user', 'left');
                 $this->db->join('instansi as i','i.id_instansi = u.id_instansi','left');
                 $query = $this->db->get('ticket as t')->result_object();
                //  var_dump($query);die;
                foreach($query as $ta): ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td><?= $ta->update_at?></td>
                  <td><?= $ta->no_ticket?></td>
                  <td><?= $ta->nama_user?></td>  
                  <td><?= $ta->nama_instansi?></td>
                  <td><?= $ta->deskripsi?></td>
                  <td><?= $ta->status?></td>  
                  <td><?= $ta->balasan?></td>  

                  <td>
                  <?php echo anchor('Admin/ticketingRespon/' . $ta->id_ticket, '<button class="btn btn-danger margin" type="button"><span class="fa fa-pencil"></span></button>'); ?>
                 <?php echo anchor('Admin/ticketHapus/' . $ta->id_ticket, '<button class="btn btn-danger margin" type="button"><span class="fa fa-trash"></span></button>'); ?>
                  </td>
                </tr> 
                <?php $nomor++; ?>
                <?php endforeach; ?>
                </tbody>
            
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

            </div>
        </div>
    </section>

 </div> 