<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    Nilai Siswa
                </h3>
            </div><!-- /.box-header -->
            <div class="clearfix">
                <div class="pull-left">
                    <a href="<?php echo $aksi_add;?>" class='btn btn-primary'>
                    <i class="fa fa-plus"></i> Add</a>
                </div>
                <!-- <div class="pull-right">
                    <a href="<?php echo base_url().$tabel.'/imp_exp';?>" class="btn btn-success">
                        <i  class="fa fa-file-excel-o"></i> Import Excel
                    </a>
                    <a href="<?php echo base_url().$tabel.'/imp_exp/template';?>" class="btn btn-danger">
                        <i class="fa fa-download"></i> Template Excel
                    </a>
                </div> -->
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>No. </td>
                            <td>SISWA</td>
                            <td>MAPEL</td>
                            <td>JENIS</td>
                            <td>NILAI</td>
                            <!-- <td>JURUSAN</td> --> -->
                            <!-- <td>TANGGAL LAHIR</td>
                            <td>ALAMAT</td>
                            <td>NO HP</td>
                            <td>EMAIL</td>
                            <td>AGAMA</td>
                            <td>ASAL SEKOLAH</td>
                            <td>ALAMAT SEKOLAH</td>
                            <td>TAHUN MASUK</td> -->
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php echo '<pre>'; print_r($data); echo "</pre>"; ?> -->
                        <?php
                          foreach($data as $k => $v)
                                {
                                  echo'<tr>';
                                  echo'<td>'.$v['id'].'</td>';
                                  echo'<td>'.$v['siswa'].'</td>';
                                  echo'<td>'.$v['mapel'].'</td>';
                                  echo'<td>'.$v['jenis'].'</td>';
                                  echo'<td>'.$v['nilai'].'</td>';
                                  // echo'<td>'.$v['jurusan'].'</td>';
                                  // echo'<td>'.$v['tgl_lahir'].'</td>';
                                  // echo'<td>'.$v['alamat'].'</td>';
                                  // echo'<td>'.$v['no_hp'].'</td>';
                                  // echo'<td>'.$v['email'].'</td>';
                                  // echo'<td>'.$v['agama'].'</td>';
                                  // echo'<td>'.$v['asal_skl'].'</td>';
                                  // echo'<td>'.$v['alamat_skl'].'</td>';
                                  // echo'<td>'.$v['tahun_masuk'].'</td>';
                                  echo "<td>";
                                  echo "<a href='".$aksi_edit.$v['id']."' class='btn btn-success'>";
                                  echo "<i class='fa fa-pencil'></i></a>";
                                  echo "&nbsp";
                                  echo "<a href='".$aksi_delete.$v['id']."' class='btn btn-danger'>";
                                  echo "<i class='fa fa-trash'></i></a>";
                                  echo "</td>";
                                  echo'</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>
