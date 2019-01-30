<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Pengaturan
    <!-- <small>Manajemen Berita</small> -->
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Pengaturan</a></li>
    <!-- <li class="active">Manajemen Barita</li> -->
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class='row'>
    <form>
    <div class='col-md-8'>
        <div class='box box-info'>
          <div class='box-header'>
          </div><!-- /.box-header -->
          <div class='box-body pad'>
            <div class="form-group has-feedback">
              <input type="text" name="username" id="username" class="form-control" placeholder="Nama Pengguna" value="<?php echo $this->session->userdata('username') ?>" />
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="oldpassword" class="form-control" placeholder="Kata Sandi Lama"/>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="Kata Sandi Baru"/>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" name="newpassword2" id="newpassword2" class="form-control" placeholder="Ketik Ulang Kata Sandi Baru"/>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
          </div><!-- /.box -->
        </div>
        </div>
        <div class='col-md-4'>
          <div class='box box-info'>
            <div class='box-body pad'>
              <button class="btn btn-block btn-info btn-flat" id="btn_simpan">Simpan Perubahan</button>
            </div>
          </div><!-- /.box -->
        </div>
      </form>
    </div>
  </section><!-- /.content -->
  <!-- page script -->
  <script>
   $(document).ready(function(){

    // $('#newpassword2').change(function(){
    $('#newpassword2').on('input', function(event) {
    event.preventDefault();
      if($('#newpassword2').val() == $('#newpassword').val()){
        $(this).parent().removeClass('has-error');
      } else {
        $(this).parent().addClass('has-error');
      }
    });

    //GET UPDATE
    $('#show_data').on('click','.item_edit',function(){
      var id = $(this).attr('data');
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

    //Simpan
    $('#btn_simpan').on('click',function(){
      var username  = $('#username').val();
      var password = $('#newpassword2').val();
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('admin/set_pengaturan') ?>",
        dataType : "JSON",
        data : {username:username, password:password},
        success: function(data){
          // $('[name="id_edit"]').val("");
          // $('[name="judul_edit"]').val("");
          // $('[name="konten_edit"]').val("");
          // $('[name="gambar_edit"]').val("");
          // $('[name="id_user_edit"]').val("");
          // $('#ModalaEdit').modal('hide');
          // tampil_data_berita();
        }
      });
      return false;
    });

  });
</script>