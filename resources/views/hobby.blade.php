@extends('layouts.app')

@section('title','Hobby — CV')
@section('hero_title','My Hobbies')
@section('hero_subtitle','This page highlights my personal hobbies and interests that reflect who I am outside of work and academics.')

@section('content')
  <div class="row g-4">
    <div class="col-md-4">
      <div class="glass p-3 h-100 text-center">
        <i class="bi bi-book-half display-5 text-accent"></i>
        <h5 class="mt-3">Reading</h5>
        <p class="text-secondary small">I enjoy reading novels, self-development books, and articles about something new to learn.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="glass p-3 h-100 text-center">
        <i class="bi bi-basket display-5 text-accent"></i>
        <h5 class="mt-3">Cooking & Baking</h5>
        <p class="text-secondary small">Experimenting with new recipes and baking desserts is one of my favorite ways to relax.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="glass p-3 h-100 text-center">
        <i class="bi bi-heart-pulse display-5 text-accent"></i>
        <h5 class="mt-3">Sports</h5>
        <p class="text-secondary small">I love Running and doing light workouts to stay active and healthy.</p>
      </div>
    </div>
  </div>
@endsection
