<?php
$nama = "";
//$mata_pelajaran= 0;
// $singkatan = "";
// $judul = "";
// $no_doc_ref = "";
// $nama_file = "";
// $reviewer = 0;
if(isset($data) && count($data)>0)
{
  $nama = $data[0]['nama'];
  //$mata_pelajaran = $data[0]['mata_pelajaran'];
  // $singkatan = $data[0]['singkatan'];
  // $judul = $data[0]['judul'];
  // $no_doc_ref = $data[0]['no_doc_ref'];
  // $nama_file = $data[0]['nama_file'];
  // $reviewer = $data[0]['reviewer'];
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
            <label>Nama Pekerjaan</label>
            <input name="nama" value="<?php echo $nama;?>" type="text" class="form-control" id="nama" placeholder="Masukkan Jenis Pekerjaan">
            <p class="help-block"></p>
          </div>

          <div class="form-group">
           <a class="btn btn-primary" id="btn_add_recomended">Tambah Pekerjaan</a>
         </div>
         <table class="table table-stripped table-bordered" id="list_rekomendasi">
           <tbody>
           </tbody>
         </table>
          <!-- <div class="form-group">
             <?php
               if(isset($metpel))
               {
                 echo $metpel->getSelect($mata_pelajaran,0,1,"mata_pelajaran");
               }
             ?>
             <p class="help-block"></p>
           </div> -->
          <!-- <div class="form-group">
            <label>Singkatan :</label>
            <input name="singkatan" value="<?php echo $singkatan;?>" type="text" class="form-control" id="singkatan" placeholder="Masukkan Singkatan">
            <p class="help-block"></p>
          </div> -->
          <!-- <div class="form-group">
            <a class="btn btn-primary" id="btn_add_recomended">Add Rekomendasi</a>
          </div> -->
          <!-- <table class="table table-stripped table-bordered" id="list_rekomendasi"> -->
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
</div>   <!-- /.row -->
<?php echo $js; ?>
<script type="text/javascript">
jQuery(function(){

  jQuery("a#btn_add_recomended").click(function(){
      var inp_kerja = jQuery("<input>").addClass("form-control");

      var btn_remove = jQuery("<a>").addClass("btn btn-danger").text("Remove");
      // input subject
      inp_kerja.attr({
        type:"text",
        name:"nama[]",
        id:"nama",
        placeholder:"Masukkan Jenis Pekerjaan"
      });
      // content
      // event remove
      btn_remove.on("click",function(){
        jQuery(this).parent().parent().parent().remove();
      });

      var tr = jQuery("<tr>");

      var div_kerja = jQuery("<div class='form-group'>");
      var div_remove = jQuery("<div class='form-group'>");

      var td = jQuery("<td>");

      // Label
      div_kerja.append(jQuery("<label>").text("Nama Pekerjaan"));
      div_remove.append(btn_remove);

      // add input
      div_kerja.append(inp_kerja);

      td.append(div_kerja);

      td.append(div_remove);

      tr.append(td);

      jQuery("table#list_rekomendasi tbody").append(tr);
      // jQuery("select[select2='true']").select2();
      //Date picker
    });
    jQuery("form").submit(function(){
        var formData = new FormData(jQuery(this)[0]);
       jQuery.ajax({
         type: "POST",
         url : "form.php",
         data: formData,
                async: false,

                // dataType : "json",
                cache: false,
                contentType: false,
                processData: false,
                success : function(data)
                {
                  console.log(data);
                  var dt = JSON.parse(data);
                  if(dt.status != "sukses"){
                      jQuery("div#notif").html("");
                      jQuery.each(dt.status,function(k,v){
                          jQuery("div#notif").append(
                              jQuery("<div></div>")
                              .addClass("alert alert-danger alert-dismissable")
                              .append(
                                  jQuery("<button></button")
                                  .attr({
                                      type:"button",
                                      class:"close",
                                      'data-dismiss':"alert",
                                      'aria-hidden':"true"
                                  })
                              )
                              .append(
                                  jQuery("<i></i>")
                                  .attr({
                                      class:"icon fa fa-info"
                                  })
                              )
                              .append(" Alert<br>")
                              .append(v)
                          );
                      });
                      return false;
                } else {
                    location.href = dt.redirek;
                }
                },
                error: function(jqXHR,textStatus,errorThrown)
                {
                  jQuery("div#notif").append(
                        jQuery("<div></div>")
                        .addClass("alert alert-danger alert-dismissable")
                        .append(
                            jQuery("<button></button")
                            .attr({
                                type:"button",
                                class:"close",
                                'data-dismiss':"alert",
                                'aria-hidden':"true"
                            })
                        )
                        .append(
                            jQuery("<i></i>")
                            .attr({
                                class:"icon fa fa-info"
                            })
                        )
                        .append(" Alert<br>")
                        .append("Error status "+textStatus+" Dengan nama error : "+errorThrown)
                    );
                }
            });
            return false;
       });
});
</script>
