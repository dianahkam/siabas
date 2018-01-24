<?php 

$pegawai = 0;
$tingkat = 0;
$kelas = 0;
$tahun_ajar = date("Y-m-d");
$jurusan = 0;
$mapel = 0;


if(isset($data))
{
	
	$pegawai = $data[0]['biodata'];
	$tingkat = $data[0]['tingkat'];
  $kelas = $data[0]['kelas'];
	$tahun_ajar = $data[0]['tahun_ajar'];
  $jurusan = $data[0]['jurusan'];
  $mapel = $data[0]['mapel'];

	
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
            <label>Pegawai</label>
            <select class="form-control">
              <option value="1">SD</option>
              <option value="0">SMA</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Tingkat</label>
            <select class="form-control">
              <option value="1">SD</option>
              <option value="0">SMA</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Kelas</label>
            <select class="form-control">
              <option value="1">SD</option>
              <option value="0">SMA</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Tahun Ajar</label>
            <input value="<?php echo $tahun_ajar;?>" name="tahun_ajar" type="text" date="date" class="form-control" id="tgl_deadline" placeholder="Tanggal Deadline">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Jurusan</label>
            <select class="form-control">
              <option value="1">SD</option>
              <option value="0">SMA</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Mapel</label>
            <select class="form-control">
              <option value="1">SD</option>
              <option value="0">SMA</option>
            </select>
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