<x-app-layout>
    @section('main-content')
    <div class='individual-post-container'>
        <div class='individual-post'>
            <div class='individual-post-info'>
                <div class='breadcrumb'>
                    <ul class='breadcrumb-link'>
                        <li class='breadcrumb-link__item'>
                            <a href='/' class='active-link'>
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

                <h3 class='individual-post-title'>{{$post->title}}</h3>
                <div class='post-author'>
                    <img
                        src="{{asset('images/svg/author-icon.svg')}}"
                        class='post-author--icon'
                        alt='author icon'
                        width={25}
                        height={25} />
                    <p class='post-author--name'>{{$post->user->name}}</p>
                </div>
                <div class='post-date'>
                    <img
                        src="{{asset('images/svg/time-icon.svg')}}"
                        class='post-date--icon'
                        alt='time icon'
                        width={25}
                        height={25} />
                    <time
                        datetime="{{ $post->created_at }}"
                        class="post-date--text">{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
                    </time>
                </div>
                <span class='line-demacation'></span>

                <div>{!! $post->content !!}</div>
            </div>
        </div>
    </div>
    @endsection
</x-app-layout>