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

            <div class="form-group">
              <input type="text" name="username" id="username" class="form-control" placeholder="Nama Pengguna" value="<?php echo $this->session->userdata('username') ?>" />
            </div>

            <div class="pull-right" style="margin-bottom: 15px">
            <button class="btn btn-info btn-flat" id="btn_ganti">Ubah Kata Sandi</button>
            </div>

            <div class="pull-right hidden" style="margin-bottom: 15px">
            <button class="btn btn-danger btn-flat" id="btn_batal">Batal</button>
            </div>

            <div class="form-group hidden">
              <input type="password" name="oldpassword" id="oldpassword" class="form-control" placeholder="Kata Sandi Lama"/>
            </div>

            <div class="form-group hidden">
              <input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="Kata Sandi Baru"/>
            </div>

            <div class="form-group hidden">
              <input type="password" name="newpassword2" id="newpassword2" class="form-control" placeholder="Ketik Ulang Kata Sandi Baru"/>
            </div>

            <div class="form-group">
              <input type="text" name="fax" id="fax" class="form-control" placeholder="Faximile"/>
            </div>

            <div class="form-group">
              <input type="text" name="notelp" id="notelp" class="form-control" placeholder="Nomor Telepon"/>
            </div>

            <div class="form-group">
              <input type="text" name="email" id="email" class="form-control" placeholder="Email"/>
            </div>

            <div class="form-group">
              <input type="text" name="web" id="web" class="form-control" placeholder="Website"/>
            </div>

          </div><!-- /.box -->
        </div>
      </div>
    </form>
    <div class='col-md-4'>
      <div class='box box-info'>
        <div class='box-body'>
          <button class="btn btn-block btn-info btn-flat" id="btn_simpan">Simpan Perubahan</button>
<!--           <ul class="nav nav-pills nav-stacked">
            <li class="active">
              <a href="#">
                <i class="fa fa-user"></i> Nama Pengguna 
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-lock"></i> Kata Sandi
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-fax"></i> Fax
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-phone"></i> No. Telp. 
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-envelope"></i> Email
              </a>
            </li>
          </ul> -->
        </div>
      </div><!-- /.box -->
    </div>
  </div>
</section><!-- /.content -->
<!-- page script -->
<script>
 $(document).ready(function(){

  get_data();

  $('title').html($('title').html()+' | Pengaturan');

  function set() {
    $('#btn_batal').parent().addClass('hidden');
    $('#btn_ganti').parent().removeClass('hidden');
    $('#oldpassword').parent().addClass('hidden');
    $('#newpassword').parent().addClass('hidden');
    $('#newpassword2').parent().addClass('hidden');
  }

  $('#btn_ganti').on('click', function(event) {
    event.preventDefault();
    $('#btn_ganti').parent().addClass('hidden');
    $('#btn_batal').parent().removeClass('hidden');
    $('#oldpassword').parent().removeClass('hidden');
    $('#newpassword').parent().removeClass('hidden');
    $('#newpassword2').parent().removeClass('hidden');
    $('#oldpassword').val("");
    $('#newpassword').val("");
    $('#newpassword2').val("");
  });
  $('#btn_batal').on('click', function(event) {
    event.preventDefault();
    set();
  });

  $('#newpassword2').on('input', function(event) {
    event.preventDefault();
    if($('#newpassword2').val() == $('#newpassword').val()){
      $(this).parent().removeClass('has-error');
    } else {
      $(this).parent().addClass('has-error');
    }
  });

    function get_data(){
      $.ajax({
        type  : 'ajax',
        url   : '<?php echo base_url()?>admin/get_data',
        async : false,
        dataType : 'json',
        success : function(data){
          $('#fax').val(data[0].fax);
          $('#notelp').val(data[0].telp);
          $('#email').val(data[0].email);
          $('#web').val(data[0].web);
        }

      });
    }

  //Simpan
    $('#btn_simpan').on('click',function(){
      var username  = $('#username').val();
      var password  = $('#newpassword2').val();
      var oldpassword  = $('#oldpassword').val();
      var notelp    = $('#notelp').val();
      var fax       = $('#fax').val();
      var email     = $('#email').val();
      var web       = $('#web').val();
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('admin/set_pengaturan') ?>",
          dataType : "JSON",
          data : {username:username, password:password, oldpassword:oldpassword, notelp:notelp, fax:fax, email:email, web:web},
          success: function(response){
            if (response == "tidaksama") {
              $('#oldpassword').parent().addClass('has-error');
            } else {
            Swal.fire(
              'Berhasil!',
              'Perubahan berhasil disimpan!',
              'success'
              );
            set();
          }
          }
        });
        return false;
    });
  });
</script>