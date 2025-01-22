@props(['recommendPost'])

<div class="recommend-post-info">
    <div class="recommend-post-img">
        <a href="{{ $recommendPost->slug }}">
            <img src="{{ $recommendPost->image }}" alt="{{ $recommendPost->slug }}" class="recommend-post-img">
        </a>
    </div>
    <div class="recommend-post-content">
        <h3 class="recommend-post-title">
            <a href="{{ $recommendPost->slug }}" class="active-link ml-0 w-full">
                {{ $recommendPost->title }}
            </a>
        </h3>
        <div class="post-date">
            <img src="{{ asset('images/svg/time-icon.svg') }}" alt="time icon" class="post-date--icon" width="25" height="25">
            <time datetime="{{ $recommendPost->created_at }}" class="post-date--text">{{ \Carbon\Carbon::parse($recommendPost->created_at)->format('F j, Y') }}</time>
        </div>
    </div>
</div>