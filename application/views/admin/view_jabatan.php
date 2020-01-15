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
                    <h3 class="box-title">Daftar Jabatan</h3>
                    </div>
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $nomor=1 ?>
                        <?php foreach($jabatan as $jab): ?>
                            <tr>
                                <td><?php echo $nomor?></td>
                                <td><?= $jab->nama_jabatan?></td>
                                <td>

                                <?php echo anchor('Admin/jabatanEdit/' . $jab->id_jabatan, '<button class="btn btn-success margin" type="button"><span class="fa fa-pencil"></span> </button>'); ?>
                               
                                </td>
                            </tr>
                        <?php $nomor++ ?>    
                        <?php endforeach;?>   
                        </tbody>
                        <!-- <tfoot>
                            <tr>
                            <th>Nomor</th>
                            <th>Nama_Jabatan</th>
                            <th>Action</th>
                            </tr>
                        </tfoot> -->
                    </table>
                </div>
            </div>
            </div>
                
        </div>
    </section>
</div>