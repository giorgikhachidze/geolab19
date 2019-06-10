@extends("layouts.master")

@section("title", "Index")

@section("header")

@component("components.header")

    @slot('title')
        Clean blog
    @endslot

    @slot('image')
        front/img/home-bg.jpg
    @endslot

    A Blog Theme by Start Bootstrap    
@endcomponent


@endsection

@section("main")

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @forelse($blogs as $blog)
        <div class="post-preview">
          <a href="{{ route("blog.article", [$blog->id, $blog->title]) }}">
            <h2 class="post-title">
              {{ $blog->title }}
            </h2>
            <h3 class="post-subtitle">
              {{ $blog->sub_title }}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">{{ $blog->author }}</a>
            on {{ Carbon\Carbon::parse($blog->publish_date)->format('D-M-Y') }}</p>
        </div>
        <hr>
        @empty
          პოსტები არარის.
        @endforelse
        <!-- Pager -->
        <div class="clearfix">
          
          {{ $blogs->links() }}

        </div>
      </div>
    </div>
  </div>

  <hr>

@endsection