@extends('layouts.app')

@section('content')
  <div class="container error-404 py-5">
    <div class="archive-header pb-3 mb-5">
      <h1 class="archive-title">{{ App::title() }}</h1>
    </div>

    @if (!have_posts())
      <div class="alert alert-warning mb-5">
        <p class="mb-0">The page you were looking for doesn&rsquo;t appear to exist. Why not try <a class="alert-link" href="{{ home_url('/') }}">returning home</a> or performing a search?</p>
      </div>
      {!! get_search_form(false) !!}
    @endif
  </div>
@endsection
