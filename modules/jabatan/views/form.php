<?php 
$nama = "";
if(isset($data))
{
  $nama = $data[0]['nama'];
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
          <div class="form-group">
            <label>Nama</label>
            <input value="<?php echo $nama;?>" name="nama" type="text" class="form-control" id="nama" placeholder="Enter name">
            <p class="help-block"></p>
          </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div><!-- /.box -->

  </div><!--/.col (left) -->
</div>   <!-- /.row -->
<?php echo $js;?>