@extends('layouts.main')

@section('header-title')
Главная страница
@endsection

@section('content')
<div class="hero">
    <div class="hero-overlay">
        <h1>Welcome to our website!</h1>
        <p>Learn programming with us!</p>
        <a href="#" class="hero-btn">Start</a>
    </div>
</div>

<div class="main-container">
    <div class="main-block">
        <h1>Home page</h1>
        <p>This is the home page content.</p>
    </div>
    
@include('includes.aside')
</div>

@endsection




