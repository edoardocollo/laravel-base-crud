@extends('layout.main')
@section('titolo_head')
  show post
@endsection
@section('titolo')
  post
@endsection
@section('nav')
  @include('layout.nav')
@endsection
@section('main')
  @include('layout.show_post')
@endsection
