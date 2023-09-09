{{--
  Template Name: StyleGuide Template
--}}

@extends('layouts.app')
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/public/styleguide.css' ?>">
<style>
  .sr-only:not(:focus):not(:focus-within) {
    position: absolute!important;
    width: 1px!important;
    height: 1px!important;
    padding: 0!important;
    margin: -1px!important;
    overflow: hidden!important;
    clip: rect(0,0,0,0)!important;
    white-space: nowrap!important;
    border: 0!important;
  }
</style>

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
  @endwhile
@endsection
