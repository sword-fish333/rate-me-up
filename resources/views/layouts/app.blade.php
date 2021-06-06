<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Rate me uo') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
        <body class="font-sans bg-gray-background text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">
            <a href="#">                    <img src="{{asset('images/logo.jpg')}}" alt="login" class="w-12 h-12 rounded-full">
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
            <div class="w-70 mr-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi assumenda deserunt eius incidunt maxime! Ab accusantium aspernatur at aut beatae, consequuntur dignissimos eligendi est et excepturi facere impedit, ipsa iste labore maxime molestias porro quaerat quas quod similique soluta sunt ut vel velit veritatis vero voluptatum. Accusamus adipisci aliquid amet animi at aut commodi dolor doloribus eius enim expedita explicabo harum inventore ipsam iusto minima mollitia nostrum officiis perferendis praesentium quasi qui recusandae, reiciendis repellendus reprehenderit vel veniam veritatis voluptas voluptatem voluptatum. Ab amet autem eius, enim eos error, expedita explicabo fugit iure modi mollitia nobis officia rem repellendus velit.</div>
            <div class="w-175">
                <nav class="flex items-center justify-between text-xs">
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                        <li><a href="#" class="border-b-4 pb-3 border-blue">All ideas</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Considering</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">In progress</a></li>
                    </ul>
                    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">

                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Implemented</a></li>
                        <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue">Closed(12)</a></li>
                    </ul>
                </nav>
                <div class="mt-8">
                    {{$slot}}
                </div>
            </div>
        </main>
    </body>
</html>
