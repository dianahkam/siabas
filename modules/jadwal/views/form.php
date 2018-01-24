<?php 
$mapel = 0;
$tingkat = 0;
$tahun_ajar = date("Y");
$jam_mulai = time("h:i:sa");
$kelas =0;
$jam_selesai = date("h:i:sa");
$hari ="";
if(isset($data))
{
  $mapel = $data[0]['mapel'];
  $tingkat = $data[0]['tingkat'];
  $tahun_ajar = $data[0]['tahun_ajar'];
  $jam_mulai = $data[0]['jam_mulai'];
  $kelas= $data[0]['kelas'];
  $jam_selesai = $data[0]['jam_selesai'];
  $hari = $data[0]['hari'];
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
            <label>Mapel</label>
            <select class="form-control">
              <option></option>
            </select>
          </div>
          <div class="form-group">
            <label>Tingkat</label>
            <select class="form-control">
              <option></option>
            </select>
          </div>
          <div class="form-group">
            <label>Tahun ajar</label><br>
            <input value= "<?php echo $tahun_ajar;?>" name="tahun_ajar" type="text" date="date" class="form-control" id="tahun_masuk" placeholder="Enter Tahun Ajar">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Jam Mulai</label>
            <input value="<?php echo $jam_mulai;?>" name="jam_mulai" type="text" class="form-control" id="jam_mulai" date="time" placeholder="Enter Jam Mulai">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <select class="form-control">
              <option></option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
           <label>Jam Selesai</label>
            <input value="<?php echo $jam_selesai;?>" name="jam_selesai" type="text" class="form-control" id="jam_selesai" date="time" placeholder="Enter Jam Selesai">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Hari</label>
            <input value="<?php echo $hari;?>" name="hari" type="text" class="form-control" id="HARI" placeholder="Enter Hari">
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