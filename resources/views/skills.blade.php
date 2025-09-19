@extends('layouts.app')

@section('title','Skills — CV')
@section('hero_title','Skills')
@section('hero_subtitle','This page showcases a blend of both my hard and soft skills, highlighting the technical expertise and interpersonal abilities that I have developed through my academic and professional experiences.')

@section('content')
  <div class="row g-4">
    {{-- Hard Skills --}}
    <div class="col-md-6">
      <h2 class="h6 mb-3">Hard Skills</h2>
      <ul class="list-group list-group-flush">
        <li class="list-group-item bg-transparent text-light border-secondary">Bahasa Inggris</li>
        <li class="list-group-item bg-transparent text-light border-secondary">Microsoft Word</li>
        <li class="list-group-item bg-transparent text-light border-secondary">Microsoft Excel</li>
        <li class="list-group-item bg-transparent text-light border-secondary">Google Docs</li>
        <li class="list-group-item bg-transparent text-light border-secondary">Google Spreadsheet</li>
        <li class="list-group-item bg-transparent text-light border-secondary">Python, Database Management/SQL, Web Development, RStudio</li>
        <li class="list-group-item bg-transparent text-light border-secondary">Canva, Figma</li>
      </ul>
    </div>

   
    <div class="col-md-6">
      <h2 class="h6 mb-3">Soft Skills</h2>
      <ul class="list-group list-group-flush">
        <li class="list-group-item bg-transparent text-light border-secondary">Kerja Sama & Kolaboratif</li>
        <li class="list-group-item bg-transparent text-light border-secondary">Kepemimpinan</li>
        <li class="list-group-item bg-transparent text-light border-secondary">Etos Kerja yang Kuat</li>
        <li class="list-group-item bg-transparent text-light border-secondary">Public Speaking</li>
        <li class="list-group-item bg-transparent text-light border-secondary">Self-Direction & Keinginan Belajar Tinggi</li>
        <li class="list-group-item bg-transparent text-light border-secondary">Mudah beradaptasi & ramah</li>
      </ul>
    </div>
  </div>
@endsection
