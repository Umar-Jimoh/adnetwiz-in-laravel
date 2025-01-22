@props(['post'])

<div class="post overflow-hidden">
    <a href="{{ '/' . $post->category->slug . '/' . $post->slug }}">
        <img src="{{ $post->image }}" alt="" class="post-image active-img w-full h-60 object-cover">
    </a>
    <span class="post-tag">{{ $post->category->name }}</span>
    <div class="post-info">
        <h3 class="post-title">
            <a href="{{ '/' . $post->category->slug . '/' . $post->slug }}" class="active-link">
                {{ $post->title }}
            </a>
        </h3>
        <div class="post-author">
            <img src="{{ asset('images/svg/author-icon.svg') }}" alt="author icon" class="post-author--icon" width="25" height="25">
            <p class="post-author-name">{{ $post->user->name}}</p>
        </div>
        <div class="post-date">
            <img src="{{ asset('images/svg/time-icon.svg') }}" alt="time icon" class="post-date--icon" width="25" height="25">
            <time datetime="{{ $post->created_at }}" class="post-date--text">{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}</time>
        </div>
        <p class="post-excerpt">{!! Str::limit(strip_tags($post->content), 100) !!}</p>
    </div>
</div>