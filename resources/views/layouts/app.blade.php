<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Rate me up') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom_styles.css') }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans bg-gray-background text-gray-900 text-sm">
<header class="flex items-center justify-between px-8 py-4">
    <a href="#"> <img src="{{asset('images/logo.jpg')}}" alt="login" class="w-12 h-12 rounded-full">
    </a>
    <div class="flex items-center">
        @if (route('login'))
            <div class=" px-6 py-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{route('logout')}}"
                           onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                    @if (route('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        <a href="#">
            <img src="{{asset('images/login_img.jpg')}}" alt="login" class="w-12 h-12 rounded-full">
        </a>
    </div>
</header>
<main class="container flex mx-auto max-w-custom">
    <div class="w-70 mr-5">
        <div class=" add-idea-container bg-white border-2 border-blue rounded-xl mt-16">
            <div class="text-center px-6 py-2 pt-6">
                <h3 class="font-semibold text-base">Add an idea</h3>
                <p class="text-xs mt-4">Let us know what you would like and we will take a look over!</p>
            </div>
            <form action="#" method="POST" class="space-y-4 px-4 py-6" >
                <div>
                    <input type="text" class="w-full text-sm bg-gray-100 border-none rounded-xl placeholder-gray-900 px-4 py-2" placeholder="Your idea">
                </div>
                <div>
                    <select name="category_add" id="category_add" class="w-full border-none rounded-xl px-4 py-2 bg-gray-100 text-sm">
                        <option value="Filter one">Filter one</option>
                        <option value="Filter two">Filter two</option>
                        <option value="Filter three">Filter three</option>
                        <option value="Filter four">Filter four</option>
                    </select>
                </div>
                <div>
                    <textarea name="idea" id="idea" cols="30" rows="4" class="w-full bg-gray-100 border-none placeholder-gray-900 text-sm px-4 py-2" placeholder="Describe your idea"></textarea>
                </div>
                <div class="flex items-center justify-between space-x-3">
                    <button type="button" class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 border-2  font-semibold border-gray-200 hover:border-gray-400 transition duration-200 ease-in rounded-xl px-4 py-3">
                        <svg  class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                        </svg>
                        <span class="ml-1">Attach</span>
                    </button>
                    <button type="submit" class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue border-2  font-semibold border-blue text-white hover:border-blue transition duration-200 ease-in rounded-xl px-4 py-3">
                        <svg  class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                        </svg>
                        <span >Submit</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="w-175">
        <nav class="flex items-center justify-between text-xs">
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                <li><a href="#" class="border-b-4 pb-3 border-blue">All ideas</a></li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering</a>
                </li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In
                        progress</a></li>
            </ul>
            <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">

                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented</a>
                </li>
                <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed(12)</a>
                </li>
            </ul>
        </nav>
        <div class="mt-8">
            {{$slot}}
        </div>
    </div>
</main>
</body>
</html>
