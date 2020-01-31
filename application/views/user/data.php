  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">List Your Ticket</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nomor Ticket</th>
                <th>Judul Ticket</th>
                <th>status</th>
                <th>indikator</th>

                <th>balasan</th>

                <th>Option</th>
              </tr>
              </thead>
              <tbody>
              <?php 
              $i=1;
                  foreach($data as $a){?>
                    <?php if($a['id_instansi']!=$this->session->userdata('idinstansi') ) continue;?>  
              <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $a['no_ticket'];?></td>
                <td><?php echo $a['judul_ticket'];?>
                <td><?php echo $a['status'];?>
                  <?php if($a['status'] != "Waiting"){ ?>
                  <span class="label label-danger pull-right">new!</span></td>                  
                  <?php } ?>
                  <td><?php echo $a['indikator'];?>

                  <td><?php echo $a['balasan'];?>
                <td><a href="<?php echo site_url('dashboard/view_ticket/'.$a['id_ticket']);?>">VIEW</a></td>
              </tr>
              <?php $i++;}?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  