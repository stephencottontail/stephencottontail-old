@extends('layouts.app')

@section('content')
  <div class="container search-results py-5">
    <div class="archive-header pb-3 mb-5">
      <h1 class="archive-title">{{ App::title() }}</h1>
    </div>

    @if (!have_posts())
      <div class="alert alert-warning mb-5">
        {{  __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while(have_posts()) @php(the_post())
      @include('partials.content-search')
    @endwhile

    {!! the_posts_pagination(['before_page_number' => '<span class="screen-reader-text">Page</span>']) !!}
  </div>
@endsection
