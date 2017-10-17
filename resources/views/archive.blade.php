@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="archive-header pb-3 mb-3">
      <h1 class="archive-title">{{ App::title() }}</h1>
    </div>
    @while(have_posts()) @php(the_post())
      @include('partials.content')
    @endwhile

    {!! the_posts_pagination(['before_page_number' => '<span class="screen-reader-text">Page</span>']) !!}
  </div>
@endsection
