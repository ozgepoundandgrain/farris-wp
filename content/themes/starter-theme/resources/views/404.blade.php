@extends('layouts.app')

@section('content')
  @if (!have_posts())
    @include('partials.page-header')
    @include('partials.404')
  @endif
@endsection
