@extends('layouts.main')

@section('header-title')
Edit post
@endsection

@section('content')
@if($errors->any())
    <div class="block-error">
        <ul>
            @foreach($errors->all() as $err)
                <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="main-container">
    <div class="main-block contact-block"> 
        <h1>Edit post</h1>
        <form action="{{ route('posts.edit', $post->id) }}" method="POST">
            @csrf

            <label for="title">Title</label> 
            <input type="text" placeholder="Enter title." name="title" id="title" value="{{ $post->title }}">

            <label for="anonce">Anonce</label>
            <input type="text" placeholder="Enter anonce." name="anonce" id="anonce" value="{{ $post->anonce }}">

            <label for="text">Text</label>
            <input type="text" placeholder="Enter text." name="text" id="text" value="{{ $post->text }}">

            <button type="submit">Edit</button>
        </form>
    </div>

    @include('includes.aside')
</div> 
@endsection