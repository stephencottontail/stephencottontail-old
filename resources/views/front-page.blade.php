{{--
  This is the custom front page template.
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-hero')
  @endwhile
  <div class="container">
    @include('partials.portfolio')
    @include('partials.recent')
  </div>
@endsection
