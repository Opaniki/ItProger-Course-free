@extends('layouts.main')

@section('header-title')
All posts
@endsection

@section('content')
<div class="main-container">
    <div class="main-block">
        <h1>All posts</h1>
        <p>This is the posts page content.</p>
    </div>
    
<div class="posts"> 
    @foreach($posts as $el)
        <div class="post">
            <h2>{{ $el->title }}</h2>
            <p>{{ $el->anons }}</p>
        </div>
    @endforeach
</div>

    @include('includes.aside')
</div>
@endsection
