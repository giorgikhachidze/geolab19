@extends("layouts.admin")


@section("content")


<div class="row">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route("admin.blog.store") }}" method="POST" role="form" enctype="multipart/form-data">

            @csrf

              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" value="{{ old("title") }}" name="title" class="form-control" placeholder="title">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Sub title</label>
                  <input type="text"  value="{{ old("sub_title") }}" name="sub_title" class="form-control" placeholder="title">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Body</label>
                  <textarea id="editor1" name="body" rows="10" cols="80">{{ old("body") }}</textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Publish date</label>
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input name="image" type="file">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                
                <div class="checkbox">
                  <label>
                    <input name="is_published" value="1" type="checkbox">Published
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

          <!-- /.box -->

        </div>

        <!--/.col (right) -->
      </div>

@endsection


@section("scripts")
<script src="{{ asset('admin/bower_components/ckeditor/ckeditor.js') }}"></script>
<script>
  $(function () {

    CKEDITOR.replace('editor1')

    $('[data-mask]').inputmask();

  })

  

</script>

@endsection
