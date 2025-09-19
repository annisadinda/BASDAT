@extends('layouts.app')

@section('title', 'Gallery')

@section('hero_title', 'Gallery')
@section('hero_subtitle', 'This page features a collection of my personal photos, highlighting various memorable moments and experiences that reflect my journey and interests.')

@section('content')
  <div class="row g-4">
    <div class="col-lg-4">
      <div class="card">
        <img src="{{ asset('images/hima.jpeg') }}" class="card-img-top" alt="Image 1">
        <div class="card-body">
          <h5 class="card-title text-center">Vice Chair at HIMATESDA Dahsyat 2025 KONTOL</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <img src="{{ asset('images/empat.jpeg') }}" class="card-img-top" alt="Image 2">
        <div class="card-body">
          <h5 class="card-title text-center">KOC of BINARY 4.0</h5>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <img src="{{ asset('images/psdm.jpeg') }}" class="card-img-top" alt="Image 3">
        <div class="card-body">
          <h5 class="card-title text-center">Human Resources of HIMATESDA</h5>
        </div>
      </div>
    </div>
  </div>
@endsection
