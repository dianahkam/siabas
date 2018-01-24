<?php 
$nip_nik = "";
$nama = "";
$jenis_kelamin = 0;
$agama = "";
$tempat_lahir ="";
$tgl_lahir = date("Y-m-d");
$alamat ="";
$no_hp = "";
$email = "";
$pend_akhir = 0;
$nama_skl ="";
$gelar ="";
$tahun_masuk = date("Y-m-d");
$jabatan = 0;
$status_pgw =0;
if(isset($data))
{
  $nip_nik = $data[0]['nip_nik'];
  $nama = $data[0]['nama'];
  $jenis_kelamin = $data[0]['jenis_kelamin'];
  $agama = $data[0]['agama'];
  $tempat_lahir= $data[0]['tempat_lahir'];
  $tgl_lahir = $data[0]['tgl_lahir'];
  $alamat = $data[0]['alamat'];
  $no_hp = $data[0]['no_hp'];
  $email = $data[0]['email'];
  $pend_akhir = $data[0]['pend_akhir'];
  $nama_skl = $data[0]['nama_skl'];
  $gelar = $data[0]['gelar'];
  $tahun_masuk = $data[0]['tahun_masuk'];
  $jabatan = $data[0]['jabatan'];
  $status_pgw = $data[0]['status_pgw'];
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
            <label>NIK</label>
            <input value="<?php echo $nip_nik;?>" name="nip_nik" type="text" class="form-control" id="nip_nik" placeholder="Enter name">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input value="<?php echo $nama;?>" name="nama" type="text" class="form-control" id="nama" placeholder="Enter name">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Jenis Kelamin</label><br>
            <input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>"> Laki-Laki<br>
            <input type="radio" name="jenis_kelamin" value="<?php echo $jenis_kelamin; ?>">  Perempuan<br>
          </div>
          <div class="form-group">
            <label>Agama</label>
            <input value="<?php echo $agama;?>" name="agama" type="text" class="form-control" id="agama" placeholder="Enter name">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input value="<?php echo $tempat_lahir;?>" name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" placeholder="Enter name">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Tanggal Lahir</label>
            <input value="<?php echo $tgl_lahir;?>" name="tgl_lahir" type="text" date="date" class="form-control" id="date" placeholder="Enter name">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input value="<?php echo $alamat;?>" name="alamat" type="text" class="form-control" id="alamat" placeholder="Enter name">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>No. Hp</label>
            <input value="<?php echo $no_hp;?>" name="no_hp" type="text" class="form-control" id="no_hp" placeholder="Enter name">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>E-Mail</label>
            <input value="<?php echo $email;?>" name="email" type="text" class="form-control" id="email" placeholder="Enter email">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="form-group">
            <label>Pendidikan akhir</label><br>
            <select class="form-control">
              <option value="1">SD</option>
              <option value="2">SMP</option>
              <option value="3">SMA</option>
              <option value="4">S1</option>
              <option value="5">S2</option>
              <option value="6">S3</option>
            </select>
          </div>
          <div class="form-group">
            <label>Nama Sekolah</label>
            <input value="<?php echo $nama_skl;?>" name="nama_skl" type="text" class="form-control" id="nama_skl" placeholder="Enter name">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Gelar</label>
            <input value="<?php echo $gelar;?>" name="gelar" type="text" class="form-control" id="gelar" placeholder="Enter Gelar">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Tahun Masuk</label>
            <input value= "<?php echo $tahun_masuk;?>" name="tahun_masuk" type="text" date="date" class="form-control" id="tahun_masuk" placeholder="Enter Tahun Masuk">
            <p class="help-block"></p>
          </div>
          <div class="form-group">
            <label>Jabatan</label><br>
            <select class="form-control">
              <option value="1"></option>
              <option value="2"></option>
            </select>
          </div>
          <div class="form-group">
            <label>Status Pegawai</label><br>
            <select class="form-control">
              <option value="1">PNS</option>
              <option value="2">NON PNS</option>
            </select>
          </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div><!-- /.box -->

  </div><!--/.col (left) -->
</div>   <!-- /.row -->
<?php echo $js;?>