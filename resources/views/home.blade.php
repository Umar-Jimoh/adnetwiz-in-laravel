@extends('layouts.app')

@section('main-content')
    <!-- Dynamic content for the main content area (list of posts) -->
    <h1 class="category">{{__('Home')}}</h1>
    <div class="post-container">
        @foreach ($posts->data as $post)
            <x-post-card :post="$post" />
            @endforeach
        </div>
@endsection
