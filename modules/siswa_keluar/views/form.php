<?php
$biodata = 0;
$status = 0;
$tgl = "";

if(isset($data) && count($data)>0)
{
  $biodata = $data[0]['biodata'];
  $status = $data[0]['status'];
  $tgl = $data[0]['tgl'];
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
            <label>Data Siswa Keluar</label>
             <!--  <?php
              if(isset($bio))
              {
                echo $bio->getSelect($biodata);
              }
              ?> -->
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>BIODATA :</label>
            <input name="biodata" type="text" class="form-control" id="biodata" value="<?php echo $biodata;  ?>" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>STATUS :</label>
            <input name="status" type="text" class="form-control" id="status" value="<?php echo $status;  ?>" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>TANGGAL :</label>
            <input name="tgl" type="text" date="date" class="form-control" id="tgl" value="<?php echo $tgl;  ?>" placeholder="">
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



