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
              <h3 class="box-title">Daftar Instansi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Instansi</th>
                  <th>Alamat Instansi</th>
                  <th>Action </th>
                </tr>
                </thead>
                <tbody>
                <?php $nomor=1 ?>
                <?php foreach($instansi as $ins): ?>
                <tr>
                  <td><?php echo $nomor ?></td>
                  <td hidden><?=$ins->id_instansi ?></td>

                  <td><?=$ins->nama_instansi ?></td>
                  <td><?=$ins->alamat_instansi ?></td>  
                  <td>

                  <?php echo anchor('Admin/instansiEdit/' . $ins->id_instansi, '<button class="btn btn-success margin" type="button"><span class="fa fa-pencil"></span> </button>'); ?>Edit
                  <?php echo anchor('Admin/instansiHapus/' . $ins->id_instansi, '<button class="btn btn-danger margin" type="button"><span class="fa fa-remove"></span> </button>'); ?>Hapus
    
                  </td>
                </tr> 
                <?php $nomor++; ?>
                <?php endforeach; ?>
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