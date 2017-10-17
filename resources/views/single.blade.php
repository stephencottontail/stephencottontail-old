@extends('layouts.app')

@section('content')
  <div class="container">
    @while (have_posts()) @php(the_post())
      @include('partials.content-single-'.get_post_type())
    @endwhile
    {!! the_post_navigation($single_nav_args) !!}
  </div>
@endsection
