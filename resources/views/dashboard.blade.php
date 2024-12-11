<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($user->role === 'author')
                    <!-- Author's Dashboard -->
                    <div class="flex">
                        <nav class="pl-2 pr-8 mr-10 border-r-2 min-h-[600px]">
                            <ul class="flex flex-col gap-5">
                                <li><button id="my-posts-btn" class="btn-clicked cursor-pointer inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">{{__('My Posts')}}</button></li>
                                <li><button id="new-post-btn" class="mb-8 cursor-pointer inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">{{__('New Post')}}</button></li>
                                <li><a href="{{route('profile.edit')}}" class="w-full inline-flex justify-center items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">{{__('Profile')}}</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}"
                                            class="w-full inline-flex justify-center items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </form>
                                </li>
                            </ul>
                        </nav>
                        <div>
                            {{__('content')}}
                        </div>
                    </div>
                    @else
                    <!-- reader's Dashboard -->
                    {{ __("You're logged in!") }} <b>{{$user->name}}</b>
                    <div class="mt-2">
                        <p class="inline">{{__('You can either edit your ')}}<b>{{__('Profile ')}}</b> {{__('or become an ')}}<b>{{__('Author')}}</b></p>
                        <div class="mt-4 flex">
                            <a class="items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mr-3" href="{{ route('profile.edit') }}">{{ __('Edit profile') }}</a>
                            <form action="{{ route('become.author')}}" method="post">
                                @csrf
                                <x-primary-button>{{__('Become an author')}}</x-primary-button>
                            </form>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>