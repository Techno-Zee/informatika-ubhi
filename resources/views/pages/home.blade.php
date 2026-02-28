@extends('layouts.app')

@section('title', 'Beranda - Informatika UBHI')

@section('content')

    @include('sections.home.hero')
    @include('sections.home.about')
    @include('sections.home.prodi')
    @include('sections.home.performance-announcement')
    @include('sections.home.profile')
    @include('sections.home.competence')
    @include('sections.home.article')
    @include('sections.home.lecturer')
    @include('sections.home.vendor')

@endsection