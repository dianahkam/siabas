<div class="row">
    <div class="col-xs-12">        
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    <a href="<?php echo $aksi_add;?>" class='btn btn-primary'>
                    <i class="fa fa-plus"></i> Add</a>
                </h3>                                    
            </div><!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>no</th>
                            <th>Biodata</th>
                             <th>Tanggal</th>
                            <th>Jam Masuk</th>
                            <th>Jam Pulang</th>
                            <th>Keterangan</th>
                            
                        </tr>
                       
                    </thead>
                    <tbody>
                    <?php
                        if(isset($data))
                        {
                            $n=1;
                            foreach($data as $dt)
                            {
                                echo "<tr>";
                                echo "<td>".$n++."</td>";
                                echo "<td>".$dt['tgl']."</td>";
                                echo "<td>".$dt['masuk']."</td>";
                                echo "<td>";
                                echo "<a href='".$aksi_edit.$dt['id']."' class='btn btn-success'>";
                                echo "<i class='fa fa-pencil'></i></a>";
                                echo "<a href='".$aksi_delete.$dt['id']."' class='btn btn-danger'>";
                                echo "<i class='fa fa-trash'></i></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>no</th>
                            <th>Biodata</th>
                             <th>Tanggal</th>
                            <th>Jam Masuk</th>
                            <th>Jam Pulang</th>
                            <th>Keterangan</th>
                            
                        </tr>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>