<style type="text/css">
  button {
    cursor: pointer;
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }
</style>
<div class="row">
  <!-- left column -->
  <div class="col-md-12">
  <table class="table table-stripped table-bordered">
      <tr>
        <th> Nama Siswa </th>
        <td><?php echo ucfirst ($bio[$sis[0]['biodata']]['nama']);?></td>
      </tr>
      <tr>
        <th> Alamat </th>
        <td><?php echo ucfirst($bio[$sis[0]['biodata']]['alamat']);?> </td>
      </tr>
      <tr>
        <th> Tingkat </th>
        <td><?php echo ($tkt[$sis[0]['tingkat']]['nama']);?> </td>
      </tr>
      <tr>
        <th> Kelas </th>
        <td><?php echo ($kls[$sis[0]['kelas']]['nama']);?> </td>
      </tr>
      <tr>
        <th> Tahun Ajar </th>
        <td><?php echo $sis[0]['tahun_ajar'];?> </td>
      </tr>
      <tr>
        <th> Jurusan </th>
        <td><?php echo ($jrs[$sis[0]['jurusan']]['nama']);?> </td>
      </tr>
  </table>
  <p>Detail Siswa</p>
  <table class="table table-stripped table-bordered">
    	<thead>
    		<tr>
          <th>Asal Sekolah</th>
          <th>Alamat Sekolah</th>
          <th>Tahun Masuk</th>
    		</tr>
    	</thead>
        <tbody>
          <tr>
            <td><?php echo strtoupper($bio[$sis[0]['biodata']]['asal_skl']);?> </td>
            <td> <?php echo ucfirst($bio[$sis[0]['biodata']]['alamat_skl']);?> </td>
            <td> <?php echo ucfirst($bio[$sis[0]['biodata']]['tahun_masuk']);?> </td>
          </tr>
        </tbody>
</table>

</div>
</div>
