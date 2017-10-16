@extends('layouts.app')

@section('content')
  <div class="container">
    @if (have_posts())
      @if (is_home() && !is_front_page())
        <header>
          <h1 class="screen-reader-text">@php(single_post_title())</h1>
        </header>
      @endif

      @while (have_posts()) @php(the_post())
        @include('partials.content-'.get_post_type())
      @endwhile

      {!! the_posts_pagination(['before_page_number' => '<span class="screen-reader-text">Page</span>']) !!}
    @endif
  </div>
@endsection
