@extends("layouts.admin")


@section("content")


    <div class="row">

        <!-- Striped full width table -->
        <div class="col-md-12">
            @include('admin.partials.alerts')
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">პოსტების სია</h3>

                    <div class="box-tools">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            {{ $posts->links('admin.partials.pagination') }}
                        </ul>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>ავტორი</th>
                                <th>სათაური</th>
                                <th>მოკლე აღწერა</th>
                                <th>სტატუსი</th>
                                <th>თარიღი</th>
                                <th>მოქმედება</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->sub_title }}</td>
                                    @if($post->is_published == 1)
                                        <td><span class="label label-success">გამოქვეყნებული</span></td>
                                    @else
                                        <td><span class="label label-danger">არარის გამოქვეყნებული</span></td>
                                    @endif
                                    <td>{{ $post->publish_date }}</td>
                                    <td>
                                        <form action="{{ route('admin.blog.destroy', $post->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-block btn-danger btn-xs">წაშლა</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>

        <!--/.col (right) -->
    </div>
@endsection
