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

@section('sub-content')
<!-- Dynamic content for the sub content area (sidebar posts) -->
<div class='recent-post-container'>
    <h2 class='recent-post-header'>{{__('Recent Post')}}</h2>
    @foreach ($posts->data as $post)
    <x-recent-post :post="$post" />
    @endforeach
</div>


<div class='popular-post-container'>
    <h2 class='popular-post-header'>{{__('Popular Post')}}</h2>
    @foreach ($posts->data as $post)
    <x-popular-post :post="$post" />
    @endforeach
</div>
@endsection