<?php 

$nama = "";
$singkatan = "";
$biaya = 0;


if(isset($data))
{
	
	$nama = $data[0]['nama'];
	$singkatan = $data[0]['singkatan'];
	$biaya = $data[0]['biaya'];
	
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
            <label>Nama</label>
            <input value="<?php echo $nama;?>" name="nama" type="text" class="form-control" id="nama" placeholder="Enter name">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Singkatan</label>
            <input value="<?php echo $singkatan;?>" name="singkatan" type="text" class="form-control" id="singkatan" placeholder="Singkatan">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Biaya</label>
            <input value="<?php echo $biaya;?>" name="biaya" type="number" class="form-control" id="email" placeholder="Masukkan Biaya">
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