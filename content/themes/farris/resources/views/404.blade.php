@extends('layouts.app')

@section('content')
  @if (!have_posts())
    @include('partials.page-header')
    @include('partials.404')
    @include('partials.news-card')
  @endif
@endsection
