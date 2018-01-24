<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    Siswa
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
                            <th>NISN </th>
                            <th>Nama Siswa</th>
                            <th>Tingkat</th>
                            <th>Kelas</th>
                            <th>Tahun Ajar</th>
                            <th>Jurusan</th>
                            <!-- <td>TANGGAL LAHIR</td>
                            <td>ALAMAT</td>
                            <td>NO HP</td>
                            <td>EMAIL</td>
                            <td>AGAMA</td>
                            <td>ASAL SEKOLAH</td>
                            <td>ALAMAT SEKOLAH</td>
                            <td>TAHUN MASUK</td> -->
                            <th>Action</th>
                        </tr>
                        <tr>
                            <th>NISN </th>
                            <th>Nama Siswa</th>
                            <th>Tingkat</th>
                            <th>Kelas</th>
                            <th>Tahun Ajar</th>
                            <th>Jurusan</th>
                            <!-- <td>TANGGAL LAHIR</td>
                            <td>ALAMAT</td>
                            <td>NO HP</td>
                            <td>EMAIL</td>
                            <td>AGAMA</td>
                            <td>ASAL SEKOLAH</td>
                            <td>ALAMAT SEKOLAH</td>
                            <td>TAHUN MASUK</td> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          foreach($data as $k => $vv)
                                {

                                  echo'<tr>';
                                  echo"<td><a href='".base_url().$tabel."/detail/".$vv['id']."'>".$bio[$vv['biodata']]['nisn']."</a></td>";
                                  echo'<td>'.ucfirst ($bio[$vv['biodata']]['nama']).'</td>';
                                  echo'<td>'.$tkt[$vv['tingkat']]['nama'].'</td>';
                                  echo'<td>'.$kls[$vv['kelas']]['nama'].'</td>';
                                  echo'<td>'.$vv['tahun_ajar'].'</td>';
                                  echo'<td>'.$jur[$vv['jurusan']]['nama'].'</td>';
                                  // echo'<td>'.$v['tgl_lahir'].'</td>';
                                  // echo'<td>'.$v['alamat'].'</td>';
                                  // echo'<td>'.$v['no_hp'].'</td>';
                                  // echo'<td>'.$v['email'].'</td>';
                                  // echo'<td>'.$v['agama'].'</td>';
                                  // echo'<td>'.$v['asal_skl'].'</td>';
                                  // echo'<td>'.$v['alamat_skl'].'</td>';
                                  // echo'<td>'.$v['tahun_masuk'].'</td>';
                                  echo "<td>";
                                  echo "<a href='".$aksi_edit.$vv['id']."' class='btn btn-success'>";
                                  echo "<i class='fa fa-pencil'></i></a>";
                                  echo "&nbsp";
                                  echo "<a href='".$aksi_delete.$vv['id']."' class='btn btn-danger'>";
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
