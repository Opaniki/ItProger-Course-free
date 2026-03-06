@extends('layouts.main')

@section('header-title')
Contacts
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
        <h1>Contact page</h1>
        <form action="{{ route('contact.post') }}" method="POST">
            @csrf

            <label for="name">Name</label>
            <input type="text" placeholder="Your name." name="name" id="name" value="{{ old('name') }}">

            <label for="email">Email</label>
            <input type="email" placeholder="Your email." name="email" id="email" value="{{ old('email') }}">

            <label for="Subject">Subject</label>
            <input type="text" placeholder="Your subject." name="subject" id="Subject" value="{{ old('subject') }}">

            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Your message.">{{ old('message') }}</textarea>
            <button type="submit">Enter</button>
        </form>
    </div>

    @include('includes.aside')
</div> 
@endsection