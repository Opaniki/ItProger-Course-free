@extends('layouts.main')

@section('header-title')
Contacts
@endsection

@section('content')
<div class="main-container">
    <div class="main-block"> 
        <h1>Contacts</h1>
        <p>This is the contacts page. Here you can find information for contacting our company.</p>
    </div>

    @include('includes.aside')
</div> 
@endsection