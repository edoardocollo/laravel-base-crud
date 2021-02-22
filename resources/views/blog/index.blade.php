@extends('layout.main')

@section('titolo_head')
  blog index
@endsection
@section('titolo')
  blog
@endsection
@section('nav')
  @include('layout.nav')
@endsection

@section('main')
  @include('layout.print_posts')
@endsection
