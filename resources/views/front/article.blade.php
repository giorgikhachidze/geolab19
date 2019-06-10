@extends("layouts.master")

@section("title", $blog->title)

@section("header")

@component("components.header")

    @slot('title')
        {{ $blog->title }}
    @endslot

    @slot('image')
        {{ asset($blog->image) }}
    @endslot

    {{ $blog->sub_title }}
@endcomponent


@endsection

@section("main")

<article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>{!! $blog->body !!}</p>
        </div>
      </div>
    </div>
  </article>

  <hr>

@endsection