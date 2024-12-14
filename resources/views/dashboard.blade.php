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
                        <!-- New post form -->
                        <div id="new-post-form" class="hidden">
                            <form action="{{ route('posts.store') }}" method="POST">
                                @csrf

                                <div class="flex flex-col text-sm max-w-96">
                                    <h2 class="text-lg font-semibold text-gray-700 mb-4">
                                        Share Your Insights: Create a New Post
                                    </h2>
                                    <p class="text-sm text-gray-500 mb-6">
                                        Fill in the details below to create a new post. Make sure to include a captivating title, select the right category, upload a thumbnail, and write engaging content for your audience.
                                    </p>
                                    <!-- Post title  -->
                                    <div class="flex flex-col items-start">
                                        <x-input-label class="uppercase" for="title" :value="__('Title')" />

                                        <x-text-input id="title" class="block mt-1 w-full"
                                            type="text"
                                            name="title"
                                            placeholder="Enter your post title"
                                            required />

                                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                    </div>

                                    <!-- Post category -->
                                    <div class="mt-8 flex flex-col items-start">
                                        <x-input-label class="uppercase" for="category" :value="__('Choose your post category')" />

                                        <select class="rounded cursor-pointer" name="category" id="category" required>
                                            <option value="">Select a category</option>
                                            <option value="display-ads">Display ads</option>
                                            <option value="native-ads">Native ads</option>
                                            <option value="network-ads">Network ads</option>
                                            <option value="social-ads">Social ads</option>
                                        </select>

                                        <x-input-error :messages="$errors->get('category')" />
                                    </div>

                                    <!-- Post thumbnail -->
                                    <div class="mt-8 flex flex-col items-start">
                                        <x-input-label class="uppercase" for="thumbnail" :value="__('Upload your thumbnail')" />

                                        <input class="rounded bg-[#e5e7eb] mt-1 cursor-pointer" type="file" name="thumbnail" id="thumbnail" accept="image/*" required>

                                        <x-input-error :messages="$errors->get('thumbnail')" />
                                    </div>

                                    <!-- Post Content -->
                                    <div class="mt-8 flex flex-col items-start">
                                        <x-input-label class="uppercase" for="content" :value="__('Content')" />

                                        <textarea class="w-full mt-1 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="18" name="content" id="content" required placeholder="Tell us about your post!!"></textarea>

                                        <x-input-error :messages="$errors->get('content')" />
                                    </div>
                                </div>
                                <button class="text-sm mt-8 bg-blue-500 text-white px-4 py-2 rounded" type="submit">Create Post</button>
                            </form>
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
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        class=" ml-20 w-full inline-flex justify-center items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>