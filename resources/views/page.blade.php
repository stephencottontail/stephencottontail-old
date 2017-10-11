@extends('layouts.app')

@section('content')
  <div class="container">
    @while(have_posts()) @php(the_post())
      @include('partials.content-page')
    @endwhile
  </div>
@endsection
