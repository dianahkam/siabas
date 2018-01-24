<?php 

$biodata = 0;
$jenis_bayar = 0;
$tgl_deadline = date("Y-m-d");
$tgl_bayar = date("Y-m-d");
$bayar = 0;


if(isset($data))
{
	
	$biodata = $data[0]['biodata'];
	$jenis_bayar = $data[0]['jenis_bayar'];
	$tgl_deadline = $data[0]['tgl_deadline'];
  $tgl_bayar = $data[0]['tgl_bayar'];
  $bayar = $data[0]['bayar'];

	
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
              <option value="0">SD</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Jenis Bayar</label>
            <select class="form-control">
              <option value="1">DOLAR</option>
              <option value="0">RUPIAH</option>
            </select>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Tanggal Deadline</label>
            <input value="<?php echo $tgl_deadline;?>" name="tgl_deadline" type="text" date="date" class="form-control" id="tgl_deadline" placeholder="Tanggal Deadline">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Tanggal Bayar</label>
            <input value="<?php echo $tgl_bayar;?>" name="tgl_bayar" type="text" date="date" class="form-control" id="tgl_bayar" placeholder="Tanggal Bayar">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Bayar</label>
            <input value="<?php echo $bayar;?>" name="bayar" type="number" class="form-control" id="bayar" placeholder="Tanggal Bayar">
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