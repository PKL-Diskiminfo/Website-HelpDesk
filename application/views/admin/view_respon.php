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
        <div class="col-md-8">
          <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title"> Tambah Teknisi</h3>
            <form action="<?php echo base_url("Admin/ticketingRespon/$ticket->id_ticket") ?>" method="post" enctype="multipart/form-data"> 
            <div class="box box-body">
            
            <input type="text" class="hidden" value="<?php echo $ticket->id_ticket?>">
            
            
                <div class="col-md-8">
                  <div class="form-group">
                      <label for="update_at">Tanggal</label>
                      <div class="input-group date">
                          <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                          </div>
                          <input type="text" class="form-control pull-right" id="datepicker" name="update_at" value="<?php echo $ticket->update_at ?>"disabled>
                      </div>
                  </div> 
                </div>      
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="notelp_teknisi">Nomor Ticket</label>
                        <input class="form-control" type="text" name="notelp_teknisi" value="<?php echo $ticket->no_ticket?>" disabled>
                    </div>
                  </div>

                  <div class="col-md-8">
                    <div class="form-group">
                        <label for="judul_ticket">Judul Ticket</label>
                        <input disabled class="form-control" type="text" name="judul_ticket" value="<?php echo $ticket->judul_ticket?>">
                    </div>
                  </div>  
  
                <div class="col-md-7">       
                  <div class="form-group">
                      <label for="">Deskripsi</label>
                      <textarea name="deskripsi" id="" cols="15" rows="6" class="form-control" disabled><?php echo    $ticket->deskripsi?></textarea>
                  </div>
                </div>

  
                  <div class="col-md-10">
                    <div class="form-group">
                        <label>balasan</label>
                        <textarea id="editor1" name="balasan"><?php echo $ticket->balasan?></textarea>
                      </div>
                  </div>    

                  <div class="col-md-7">
                    <div class="form-group ">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                          <option value="Waiting"  selected>Waiting</option>
                          <option value="Proses">Proses</option>
                          <option value="Finishing">Finishing</option>
                        </select> 
                    </div>
                  </div>    
                  <div class="col-md-7">  
                      <button type="submit" class="btn btn-success">Submit</button>
                      <button type="reset" class="btn btn-danger">Reset</button>
                  </div>
                </div>
              </form>
            </div>
          </div>  
        </div>
      </div>
    </section>
    
 </div>   