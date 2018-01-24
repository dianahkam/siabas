<?php 
$biodata = 0;
$hubungan = ("");
$nama = ("");
$alamat = ("");
$no_hp =("");
$pendidikan = 0;
$pekerjaan =0;
if(isset($data))
{
  $biodata = $data[0]['biodata'];
$hubungan = $data[0]['hubungan'];
$nama = $data[0]['nama'];
$alamat = $data[0]['alamat'];
$no_hp =$data[0]['no_hp'];
$pendidikan =$data[0]['pendidikan'];
$pekerjaan =$data[0]['pekerjaan'];
}
?>
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Form <?php echo $title_page;?></h3>
      </div><!-- /.box-header -->
      <!-- form start -->
      <div id="notif"></div>
      <form role="form" method="post">
        <div class="box-body">
         <div class="form-group">
             <?php
               if(isset($bio))
               {
                 echo $bio->getSelect($biodata,0,1,"biodata");
               }
             ?>
             <p class="help-block"></p>
           </div> 
          <div class="form-group">
            <label>Hubungan</label>
            <select type="text" name="hubungan" class="form-control" id="hubungan" value="<?php echo $hubungan;  ?>" placeholder="Enter Hubungan">
              <option>-- hubungan --</option>
              <option>1. Ayah Kandung</option>
              <option>2. Ibu Kandung</option>
            </select> 

          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $nama;  ?>" placeholder="Enter Nama">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <textarea input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $alamat;  ?>" placeholder="Enter Alamat"></textarea>
          </div>
          <div class="form-group">
            <label>No HP</label>
            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?php echo $no_hp;  ?>" placeholder="Enter No HP">
          </div>
           <div class="form-group">
            <label>Pendidikan</label>
            <select type="text" name="pendidikan" class="form-control" id="pendidikan" value="<?php echo $pendidikan;  ?>" placeholder="Enter Hubungan">
              <option>-- Pendidikan --</option>
              <option>1. SD</option>
              <option>2. SMP</option>
              <option>3. SMA</option>
            </select> 

          </div>
          <div class="form-group">
             <?php
               if(isset($pek))
               {
                 echo $pek->getSelect($pekerjaan,0,1,"pekerjaan");
               }
             ?>
             <p class="help-block"></p>
           </div> 
          
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div><!-- /.box -->

  </div><!--/.col (left) -->
</div>   <!-- /.row -->
<?php echo $js;?>