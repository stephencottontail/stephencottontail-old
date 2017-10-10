@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="archive-header">
      <h1 class="archive-title">{{ App::title() }}</h1>
    </div>
    @while(have_posts()) @php(the_post())
      @include('partials.content')
    @endwhile
  </div>
@endsection