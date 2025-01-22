<x-app-layout :recentPosts="$recentPosts" :popularPosts="$popularPosts">
    @section ('main-content')
    <div class="flex gap-2 text-xl mobilemd:text-[1.5rem] mb-6">
        <P class="font-bold">{{__('Result For:') }}</P> <span> {{ $query ?? '" "' }}</span>
    </div>

    @if ($posts->data)
    <div class="post-container">
        @foreach ($posts->data as $post)
        <x-post-card :post="$post" />
        @endforeach
    </div>
    @else
     <p class="text-center my-40 text-xl min-[450px]:text-2xl">{{__('No posts found. Please try a different search')}}</p>
     @endif

    @endsection
</x-app-layout>