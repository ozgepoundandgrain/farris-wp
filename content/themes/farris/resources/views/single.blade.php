@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <article @php post_class() @endphp>
      @include('partials.single-post-header')
      @include('partials.pagebuilder')
    </article>
  @endwhile
@endsection
