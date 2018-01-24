<?php 

$biodata = 0;
$tgl = date("Y-m-d");
$status_tabungan = 0;
$jumlah = 0;



if(isset($data))
{
	
	$biodata = $data[0]['biodata'];
	$tgl = $data[0]['tgl'];
	$status_tabungan = $data[0]['status_tabungan'];
  $jumlah = $data[0]['jumlah'];

	
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
            <label>Biodata</label>
            <select class="form-control">
              <option value="1">SD</option>
              <option value="0">SMA</option>
            </select>
            <p class="help-block"></p>
          </div>
          
          <div class="form-group">
            <label>Tanggal</label>
            <input value="<?php echo $tgl;?>" name="tgl" type="text" date="date" class="form-control" id="tgl" placeholder="Tanggal">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Status Tabungan</label>
            <select class="form-control">
              <option value="1">Sementara</option>
              <option value="0">Permanen</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Jumlah</label>
            <input value="<?php echo $jumlah;?>" name="jumlah" type="number" class="form-control" id="jumlah" placeholder="Tanggal">
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