<?php
$biodata = 0;
$tingkat = 0;
$kelas = 0;
$tahun_ajar = date("Y");
$jurusan = 0;

if(isset($data) && count($data)>0)
{
  $biodata = $data[0]['biodata'];
  $tingkat = $data[0]['tingkat'];
  $kelas = $data[0]['kelas'];
  $tahun_ajar = $data[0]['tahun_ajar'];
  $jurusan = $data[0]['jurusan'];
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
              <?php
                if(isset($bio))
                {
                  echo $bio->getSelect($biodata,0,1,"biodata");
                }
              ?>
              <p class="help-block"></p>
            </div>

            <div class="form-group">
                <?php
                  if(isset($tkt))
                  {
                    echo $tkt->getSelect($tingkat,0,1,"tingkat");
                  }
                ?>
                <p class="help-block"></p>
              </div>
              <div class="form-group">
                  <?php
                    if(isset($kls))
                    {
                      echo $kls->getSelect($kelas,0,1,"kelas");
                    }
                  ?>
                  <p class="help-block"></p>
                </div>
          <div class="form-group">
            <label>TAHUN AJAR :</label>
            <input name="tahun_ajar" type="text" class="form-control" id="tahun_ajar" value="<?php echo $tahun_ajar;  ?>" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
              <?php
                if(isset($jur))
                {
                  echo $jur->getSelect($jurusan,0,1,"jurusan");
                }
              ?>
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
