<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Berita
    <small>Manajemen Berita</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Berita</a></li>
    <li class="active">Manajemen Barita</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class='row'>
    <div class='col-md-12'>
      <div class='box box-info'>
        <div class='box-header'>
          <div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Berita</a></div>
        </div><!-- /.box-header -->
        <div class='box-body pad'>
          <table class="table table-striped" id="mytable">
            <thead>
              <tr>
                <th>Judul</th>
                <th>Konten</th>
                <th>Tanggal</th>
                <th>Penulis</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="show_data">

            </tbody>
          </table>
        </div>

        <!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Berita</h3>
              </div>
              <form class="form-horizontal">
                <div class="modal-body">

                  <div class="form-group">
                    <label class="control-label col-xs-3" >Judul Berita</label>
                    <div class="col-xs-9">
                      <input name="judul" id="judul" class="form-control" type="text" placeholder="Judul Berita" style="width:335px;" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-12">
                     <textarea id="konten" name="konten" rows="10" cols="80"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-xs-3" >Thumbnail berita</label>
                    <div class="col-xs-9">
                      <input name="gambar" id="gambar" class="form-control" type="text" placeholder="Konten Berita" style="width:335px;" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-9">
                      <input name="id_user" id="id_user" value="1" type="text" hidden>
                    </div>
                  </div>

                </div>

                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                  <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Berita</h3>
              </div>
              <form class="form-horizontal">
                <div class="modal-body">

                  <div class="form-group">
                    <label class="control-label col-xs-3" >Judul Berita</label>
                    <div class="col-xs-9">
                      <input name="judul_edit" id="judul2" class="form-control" type="text" placeholder="Judul Berita" style="width:335px;" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-9">
                      <textarea id="konten2" name="konten_edit" rows="10" cols="80"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-xs-3" >Thumbnail Berita</label>
                    <div class="col-xs-9">
                      <input name="gambar_edit" id="gambar2" class="form-control" type="text" placeholder="Konten Berita" style="width:335px;" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-xs-9">
                      <input name="id_user_edit" id="id_user2" value="1" type="text" hidden>
                      <input name="id_edit" id="id2" type="text" hidden>
                    </div>
                  </div>

                </div>

                <div class="modal-footer">
                  <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                  <button class="btn btn-info" id="btn_update">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--END MODAL EDIT-->

        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Berita</h4>
              </div>
              <form class="form-horizontal">
                <div class="modal-body">

                  <input type="hidden" name="kode" id="textkode" value="">
                  <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus berita ini?</p></div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                  <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--END MODAL HAPUS-->

      </div>
    </div><!-- /.box -->
  </div>
</section><!-- /.content -->
<!-- page script -->
<script>
 $(document).ready(function(){
    tampil_data_berita();   //pemanggilan fungsi tampil berita.

    $('#mytable').dataTable();

    //fungsi tampil berita
    function tampil_data_berita(){
      $.ajax({
        type  : 'ajax',
        url   : '<?php echo base_url()?>admin/data_berita',
        async : false,
        dataType : 'json',
        success : function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
            html += '<tr>'+
            '<td>'+data[i].judul+'</td>'+
            '<td>'+data[i].konten+'</td>'+
            '<td>'+data[i].tanggal_post+'</td>'+
            '<td>'+data[i].id_user+'</td>'+
            '<td style="text-align:right;">'+
            '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].id+'"> <i class="fa fa-pencil"></i> Sunting</a>'+' '+
            '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id+'"> <i class="fa fa-trash"></i> Hapus</a>'+
            '</td>'+
            '</tr>';
          }
          $('#show_data').html(html);
        }

      });
    }
    //GET UPDATE
    $('#show_data').on('click','.item_edit',function(){
      var id=$(this).attr('data');
      $.ajax({
        type : "GET",
        url  : "<?php echo base_url('admin/get_berita')?>",
        dataType : "JSON",
        data : {id:id},
        success: function(data){
          $.each(data,function(){
            $('#ModalaEdit').modal('show');
            $('[name="id_edit"]').val(data.id);
            $('[name="judul_edit"]').val(data.judul);
            $('[name="konten_edit"]').val(data.konten);
            $('[name="gambar_edit"]').val(data.gambar);
            $('[name="id_user_edit"]').val(data.id_user);
          });
        }
      });
      return false;
    });


    //GET HAPUS
    $('#show_data').on('click','.item_hapus',function(){
      var id=$(this).attr('data');
      $('#ModalHapus').modal('show');
      $('[name="kode"]').val(id);
    });

    //Simpan berita
    $('#btn_simpan').on('click',function(){
      var id           = $('#id').val();
      var judul        = $('#judul').val();
      var konten       = $('#konten').val();
      var gambar       = $('#gambar').val();
      var id_user      = $('#id_user').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('admin/simpan_berita')?>",
        dataType : "JSON",
        data : {id:id , judul:judul, konten:konten, gambar:gambar, id_user:id_user},
        success: function(data){
          $('[name="id"]').val("");
          $('[name="judul"]').val("");
          $('[name="konten"]').val("");
          $('[name="gambar"]').val("");
          $('[name="id_user"]').val("");
          $('#ModalaAdd').modal('hide');
          tampil_data_berita();
        }
      });
      return false;
    });

    //Update berita
    $('#btn_update').on('click',function(){
      var id     = $('#id2').val();
      var judul  = $('#judul2').val();
      var konten = $('#konten2').val();
      var gambar = $('#gambar2').val();
      var id_user = $('#id_user2').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('admin/update_berita')?>",
        dataType : "JSON",
        data : {id:id , judul:judul, konten:konten, gambar:gambar, id_user:id_user},
        success: function(data){
          $('[name="id_edit"]').val("");
          $('[name="judul_edit"]').val("");
          $('[name="konten_edit"]').val("");
          $('[name="gambar_edit"]').val("");
          $('[name="id_user_edit"]').val("");
          $('#ModalaEdit').modal('hide');
          tampil_data_berita();
        }
      });
      return false;
    });

    //Hapus berita
    $('#btn_hapus').on('click',function(){
      var kode = $('#textkode').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('admin/hapus_berita')?>",
        dataType : "JSON",
        data : {id: kode},
        success: function(data){
          $('#ModalHapus').modal('hide');
          tampil_data_berita();
        }
      });
      return false;
    });

  });
</script>
<script type="text/javascript">
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('konten');
        CKEDITOR.replace('konten2');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>