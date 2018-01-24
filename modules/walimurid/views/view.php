<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    Wali Murid
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
                            <td>Nama. </td>
                            <td>Alamat. </td>
                            <td>No HP. </td>
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
                                  echo'<td>'.$v['nama'].'</td>';
                                  echo'<td>'.$v['alamat'].'</td>';
                                  echo'<td>'.$v['no_hp'].'</td>';
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
