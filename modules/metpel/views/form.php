<?php
$nama = "";
$singkatan = "";
// $judul = "";
// $no_doc_ref = "";
// $nama_file = "";
// $reviewer = 0;
if(isset($data) && count($data)>0)
{
  $nama = $data[0]['nama'];
  $singkatan = $data[0]['singkatan'];
  // $judul = $data[0]['judul'];
  // $no_doc_ref = $data[0]['no_doc_ref'];
  // $nama_file = $data[0]['nama_file'];
  // $reviewer = $data[0]['reviewer'];
}
?>
<div class="row">
  <div class="col-xs-12" id="notif"></div>
  <!-- left column -->
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo $title_page;?></h3>
      </div><!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post">
        <div class="box-body">
          <div class="form-group">
            <label>Nama Matapelajaran</label>
            <input name="nama" value="<?php echo $nama;?>" type="text" class="form-control" id="nama" placeholder="Masukkan Matapelajaran">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Singkatan :</label>
            <input name="singkatan" value="<?php echo $singkatan;?>" type="text" class="form-control" id="singkatan" placeholder="Masukkan Singkatan">
            <p class="help-block"></p>
          </div>
          <!-- <div class="form-group">
            <a class="btn btn-primary" id="btn_add_recomended">Add Rekomendasi</a>
          </div> -->
          <!-- <table class="table table-stripped table-bordered" id="list_rekomendasi"> -->
            <tbody>
            </tbody>
          </table>
        </div><!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div><!-- /.box -->

  </div><!--/.col (left) -->
</div>   <!-- /.row -->
<?php echo $js; ?>
