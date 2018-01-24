<?php
$nis = 0;
$nisn = 0;
$nama = "";
$jenis_kelamin = 0;
$tempat_lahir = "";
$tgl_lahir = date("Y-m-d");
$alamat = "";
$no_hp = "";
$email = "";
$agama = "";
$asal_skl = "";
$alamat_skl = "";
$tahun_masuk = date("Y");

if(isset($data) && count($data)>0)
{
  $nis = $data[0]['nis'];
  $nisn= $data[0]['nisn'];
  $nama = $data[0]['nama'];
  $jenis_kelamin = $data[0]['jenis_kelamin'];
  $tempat_lahir = $data[0]['tempat_lahir'];
  $tgl_lahir = $data[0]['tgl_lahir'];
  $alamat = $data[0]['alamat'];
  $no_hp = $data[0]['no_hp'];
  $email = $data[0]['email'];
  $agama = $data[0]['agama'];
  $asal_skl = $data[0]['asal_skl'];
  $alamat_skl = $data[0]['alamat_skl'];
  $tahun_masuk = $data[0]['tahun_masuk'];
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
            <label>Biodata</label>
             <!--  <?php
              if(isset($bio))
              {
                echo $bio->getSelect($biodata);
              }
              ?> -->
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>NIS :</label>
            <input name="nis" type="text" class="form-control" id="nis" value="<?php echo $nis;  ?>" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>NISN :</label>
            <input name="nisn" type="text" class="form-control" id="nisn" value="<?php echo $nisn;  ?>" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>NAMA :</label>
            <input name="nama" type="text" class="form-control" id="nama" value="<?php echo $nama;  ?>" placeholder="">
            <p class="help-block"></p>
          </div>   
          <div class="form-group">
            <label>JENIS KELAMIN :</label>
            <div class="jenis_kelamin">
            <input name="jenis_kelamin" type="radio" value="0" id="jk" >Laki-laki<br>
            <input name="jenis_kelamin" type="radio" value="1" id="jk" >Perempuan
            <p class="help-block"></p>
          </div>    
          <div class="form-group">
            <label>TEMPAT LAHIR :</label>
            <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="">
            <p class="help-block"></p>
          </div>   
          <div class="form-group">
            <label>TANGGAL LAHIR :</label>
            <input type="text" date="date" name="tgl_lahir"  class="form-control" id="tgl_lahir" value="<?php echo $tgl_lahir;  ?>" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>ALAMAT :</label>
            <textarea input name="alamat" type="text" class="form-control" id="alamat" placeholder=""></textarea>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>NOMOR HP :</label>
            <input name="no_hp" type="text" class="form-control" id="no_hp" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>EMAIL :</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>AGAMA :</label>
            <input name="agama" type="text" class="form-control" id="agama" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>ASAL SEKOLAH :</label>
            <input name="asal_skl" type="text" class="form-control" id="asal_skl" placeholder="">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>ALAMAT SEKOLAH :</label>
            <textarea input name="alamat_skl" type="textarea" class="form-control" id="alamat_skl" placeholder=""></textarea>
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>TAHUN MASUK :</label>
            <input type="text"   date="year" class="form-control" id="tahun_masuk" placeholder="">
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



