<?php
$siswa = "";
$mapel = "";
$jenis = "";
$nilai = "";

if(isset($data) && count($data)>0)
{
  $siswa = $data[0]['siswa'];
  $mapel = $data[0]['mapel'];
  $jenis = $data[0]['jenis'];
  $nilai = $data[0]['nilai'];
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
            <label>Data nilai siswa</label>
             <!--  <?php
              if(isset($bio))
              {
                echo $bio->getSelect($biodata);
              }
              ?> -->
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>SISWA :</label>
            <input name="siswa" type="text" class="form-control" id="siswa" value="<?php echo $siswa;  ?>" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>MAPEL :</label>
            <input name="mapel" type="text" class="form-control" id="mapel" value="<?php echo $mapel;  ?>" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>JENIS :</label>
            <input name="jenis" type="text" class="form-control" id="jenis" value="<?php echo $jenis;  ?>" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>NILAI :</label>
            <input type="text" name="nilai" class="form-control" id="nilai" value="<?php echo $nilai;?>" placeholder="">
            <p class="help-block"></p>
          </div>
          <!-- <div class="form-group" id="attach_file">
            <label>Attachment :</label>
            <input type="file" name="nama_file" id="nama_file">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Reviewer :</label>
            <?php
              if(isset($peg))
              {
                echo $peg->getSelect($reviewer,0,"manager,section head,head of,lead of",1,"reviewer");
              }
            ?>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <a class="btn btn-primary" id="btn_add_recomended">Add Rekomendasi</a>
          </div> -->
          <table class="table table-stripped table-bordered" id="list_biodata">
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
</div>   
<?php echo $js; ?>



