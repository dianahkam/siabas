<?php 

$guru = 0;
$siswa = 0;
$tgl = date("Y-m-d");
$tgl_deadline = date("Y-m-d");
$keterangan = "";



if(isset($data))
{
	
	$guru = $guru[0]['guru'];
	$siswa = $data[0]['siswa'];
  $tgl = $data[0]['tgl'];
	$tgl_deadline = $data[0]['tgl_deadline'];
  $keterangan = $data[0]['keterangan'];

	
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
            <label>Guru</label>
            <select class="form-control">
              <option value="1">SD</option>
              <option value="0">SMA</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Siswa</label>
            <select class="form-control">
              <option value="1">Sementara</option>
              <option value="0">Permanen</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Tanggal</label>
            <input value="<?php echo $tgl;?>" name="tgl" type="text" date="date" class="form-control" id="tgl" placeholder="Tanggal">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Tanggal Deadline</label>
            <input value="<?php echo $tgl_deadline;?>" name="tgl_deadline" type="text" date="date" class="form-control" id="tgl_deadline" placeholder="Tanggal Deadline">
            <p class="help-block"></p>
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <input value="<?php echo $keterangan;?>" name="keterangan" type="text" class="form-control" id="keterangan" placeholder="Keterangan">
            <p class="help-block"></p>
          </div>
          
          
        </div><!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div><!-- /.box -->

  </div><!--/.col (left) -->
</div>   <!-- /.row -->
<?php echo $js;?>