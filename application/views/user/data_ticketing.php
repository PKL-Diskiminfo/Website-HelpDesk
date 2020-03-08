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
                <th>Tanggal</th>
                <th>Nomor Ticket</th>
                <th>Judul Ticket</th>
                <th>Status</th>
                <th>Indikator</th>
                <th>status</th>
                <th>balasan</th>
                <th>Option</th>
              </tr>
              </thead>
              <tbody>
              <?php 
              $i=1;
                  foreach($data as $a){?>
                    <?php if($a['id_user']!=$this->session->userdata('userid') ) continue;?>  
              <tr>
                <td><?php echo $i;?></td>
                <td><?php echo $a['update_at'];?></td>

                <td><?php echo $a['no_ticket'];?></td>
                <td><?php echo $a['judul_ticket'];?>
                <td><?php echo $a['status'];?>
                <td><?php echo $a['indikator'];?>
                <td><?php echo $a['status'];?>
                  <!-- <?php if($a['status'] != null){ ?>
                  <span class="label label-danger pull-right">new!</span></td>
                  <?php } ?> -->
                  <td><?php echo $a['balasan'];?>

                <td><a href="<?php echo site_url('dashboard/test/'.$a['id_ticket']);?>">VIEW</a></td>
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
  