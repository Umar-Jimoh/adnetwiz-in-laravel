@props(['post'])

<div class='popular-post-info'>
    <div class='mr-4'>
        <a href="{{ '/' . $post->category->slug . '/' . $post->slug }}">
            <img
                src='{{$post->image}}'
                class='popular-post-img'
                alt="{{$post->slug}}" />
        </a>
    </div>

    <div class='flex flex-col w-64'>
        <h3 class='popular-post-title'>
            <a
                href="{{ '/' . $post->category->slug . '/' . $post->slug }}"
                class='active-link'>
                {{$post->title}}
            </a>
        </h3>

        <div class="post-date">
            <img
                src="{{ asset('images/svg/time-icon.svg') }}"
                alt="time-icon"
                class="post-date--icon"
                width="25"
                height="25" />
            <time
                datetime="{{ $post->created_at }}"
                class="post-date--text">{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
            </time>
        </div>
    </div>
</div>