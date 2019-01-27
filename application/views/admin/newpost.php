        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Post
            <small>New Post</small>
          </h1>
          <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Post</a></li>
            <li class="active">New Post</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class='row'>
            <div class='col-md-8'>
              <div class='box box-info'>
                <div class='box-header'>
                  <input type="text" name="judul" class="form-control" placeholder="Judul">
                </div><!-- /.box-header -->
                <div class='box-body pad'>
                  <textarea id="editor1" name="editor1" rows="10" cols="80">

                  </textarea>
                </div>
              </div><!-- /.box -->
            </div>
            <div class='col-md-4'>
              <div class='box box-info'>
                <div class='box-body pad'>
                <button class="btn btn-block btn-info btn-flat">Upload</button>
                </div>
              </div><!-- /.box -->
            </div>
        </section><!-- /.content -->

        

    <script type="text/javascript">
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
        $(".textarea").wysihtml5();
      });
    </script>