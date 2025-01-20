<x-app-layout :recentPosts="$recentPosts" :popularPosts="$popularPosts">
    @section('main-content')
    <div class='individual-post-container'>
        <div class='individual-post'>
            <div class='individual-post-info'>
                <div class='breadcrumb'>
                    <ul class='breadcrumb-link'>
                        <li class='breadcrumb-link__item'>
                            <a href="{{ route('home') }}" class='active-link'>
                                {{__('Home')}}
                            </a>
                            <span>&#62;</span>
                        </li>
                        <li class='breadcrumb-link__item'>
                            <a href="{{'/category/' . $post->category->slug}}" class='active-link'>
                                {{$post->category->name}}
                            </a>
                        </li>
                    </ul>
                </div>
                <h1 class='individual-post-title'>{{$post->title}}</h1>
                <div class='post-author'>
                    <img
                        src="{{asset('images/svg/author-icon.svg')}}"
                        class='post-author--icon'
                        alt='author icon' />
                    <p class='post-author--name'>{{$post->user->name}}</p>
                </div>
                <div class='post-date'>
                    <img
                        src="{{asset('images/svg/time-icon.svg')}}"
                        class='post-date--icon'
                        alt='time icon' />
                    <time
                        datetime="{{ $post->created_at }}"
                        class="post-date--text">{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
                    </time>
                </div>
                <span class='line-demacation'></span>
                <div>
                    <img src="{{ $post->image }}" alt="{{ $post->slug }}" class="w-full h-[28rem] object-cover">
                    <article class="post-content">
                        {!! $post->content !!}
                    </article>
                    <div class='recommend-post-container'>
                        <div class='recommend-post-header-container'>
                            <h2 class='recommend-post-header'>Recommend For You</h2>
                        </div>
                        <div class="recommend-post-info-container">
                            @foreach ($post->recommends as $recommendPost)
                            <x-recommend-post :recommendPost="$recommendPost" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>