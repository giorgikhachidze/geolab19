@extends("main")

@section("title")
geolab
@endsection

@section("main")


<ul>
    @foreach($filtered as $fill)
        {{$fill->name}}
    @endforeach
</ul>

@endsection