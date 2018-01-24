<?php 

$biodata = 0;
$tgl = date("Y-m-d");
$masuk = date("h.m");
$pulang = date("h.m");
$keterangan = "";



if(isset($data))
{
	
	$biodata = $data[0][''];
	$tgl = $data[0]['tgl'];
  $masuk =$data[0]['masuk'];
	$pulang = $data[0]['pulang'];
  $keterangan = $data[0]['keterangan'];

	
}
?>
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">ABSENSI <?php echo $title_page;?></h3>
      </div><!-- /.box-header -->
      <!-- form start -->
      <div id="notif"></div>
      <form role="form" method="post">
        <div class="box-body">
          
          <div class="form-group">
            <label>Biodata</label>
            <select class="form-control">
              <!-- <option value="1">SD</option>
              <option value="0">SMA</option> -->
            </select>
            <p class="help-block"></p>
          </div>
          
          <div class="form-group">
            <label>Tanggal</label>
            <input value="<?php echo $tgl;?>" name="tgl" type="text" date="date" class="form-control" id="tgl" placeholder="Tanggal">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Jam Masuk</label>
            <input value="<?php echo $masuk;?>" name="masuk" type="text"  class="form-control" id="masuk" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Jam Pulang</label>
            <input value="<?php echo $pulang;?>" name="pulang" type="text"  class="form-control" id="pulang" placeholder="">
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