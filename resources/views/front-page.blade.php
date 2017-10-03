{{--
  This is the custom front page template.
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-front')
  @endwhile
  @include('partials.recent')
@endsection
