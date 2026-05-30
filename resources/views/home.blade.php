@extends('layouts.app')

@section('content')
    <x-nav />
    <x-hero />
    <x-about />
    <x-vision />
    <x-services />
    @livewire('projects-slideshow')
    @livewire('ongoing-carousel')
    <x-leadership />
    <x-credentials />
    @livewire('contact-form')
    <x-footer />
@endsection