@props(['post'])

<div class='recent-post-info'>
    <div class="mr-4">
        <a href="{{'/' . $post->category->slug . '/' . $post->slug}}">
            <img
                src="{{$post->image}}"
                alt="{{$post->slug}}"
                class="recent-post-img" />
        </a>
    </div>

    <div class='flex flex-col w-64'>
        <h3 class='recent-post-title'>
            <a
                href="{{'/' . $post->category->slug . '/' . $post->slug}}"
                class='active-link ml-0 w-full'>
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