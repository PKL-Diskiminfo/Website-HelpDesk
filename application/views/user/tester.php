  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

    <!-- <div class="pad margin no-print">
      <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
      </div>
    </div> -->
    <?php 
        $this->db->select(
         't.id_ticket,
          t.no_ticket,
          t.update_at,
          t.tanggal_kerusakan,
          t.deskripsi,
          u.nama_user,
          i.nama_instansi,
          i.alamat_instansi,
          t.judul_ticket ,
          t.balasan,
          t.indikator,
          t.status
          ');
        $this->db->join('user as u','u.id_user = t.id_user', 'left');
        $this->db->join('instansi as i','i.id_instansi = t.id_instansi', 'left');

        $query = $this->db->get('ticket as t')->result_array();
      //  var_dump($query);die;
        
    foreach($query as $data): ?>
          <?php endforeach ;?>

    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-ticket"></i> NO. <?php echo $data['no_ticket'] ?>
            <small class="pull-right">Date: <?php echo date("d M Y", strtotime($data['update_at'])); ?></small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
            <strong><?php echo $this->session->userdata('username')?></strong><br>            
            <?php echo $data['alamat_instansi']?><br>
            <?php echo $data['nama_instansi']?><br>
            Phone: <?php echo $this->session->userdata('notelpuser')?><br>
            Email: <?php echo $this->session->userdata('useremail')?>
          </address>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
        
      <!-- Table row -->
      <div class="row">
        <div class="col-xs-6">
        <div class="form-group">
                  <label>Keluhan</label>
                  <textarea class="form-control" rows="3" placeholder="Enter ..." disabled>
                      <?php echo $data['deskripsi']; ?>
                  </textarea>
                </div>


        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6"> 
          <div class="form-group">
            <label>Balasan</label>
                <textarea class="form-control" rows="3"  disabled>
                
                    <?php echo $data['balasan'];?>
                </textarea>
          </div>

         
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Tanggal Rusak : <?php echo $data["tanggal_kerusakan"]?></p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th>Indikator:</th>
                <td> <?php echo $data['indikator']?></td>
              </tr>
              <tr>
                <th>Status:</th>
                <td><?php echo $data['status']?></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->