<x-app-layout :recentPosts="$recentPosts" :popularPosts="$popularPosts">
    <!-- Dynamic content for the main content area (list of posts) -->
    @section('main-content')
    <h1 class="category">{{$category->name}}</h1>
    <div class="post-container">
        @foreach ($posts->data as $post)
        <x-post-card :post="$post" />
        @endforeach
    </div>
    @endsection
</x-app-layout>