<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">

        <div class="w-full bg-white">
            <nav class="drop-shadow-xl border-b-[1px] border-slate-400">
                <div class="flex flex-row justify-between items-center bg-transparent">
                    <div class="px-4 py-2">
                            <img src="{{URL::asset('/image/logo.png')}}" href="{{ route('client.test') }}"
                                class="w-[70px]"
                            >
                    </div>
                    <div class="mr-3">
                        <a class="text-lg py-2 px-4 text-slate-800" href="{{ url('/home') }}">
                            HOME
                        </a>
                        <a class="text-lg py-2 px-4 text-slate-800" href="{{ url('/manual') }}">
                            MANUAL
                        </a>
                        <a class="text-lg py-2 px-4 text-slate-800" href="{{ route('admin.dashboard.index') }}">
                            SET SCORE
                        </a>
                        
                    </div>
                    <div class="">
                        <h5 class=" flex flex-row">
                            @auth
                                <div class="mr-5 ">
                                    <a class="text-lg text-slate-50 py-2 px-4 font-thin bg-slate-800 hover:font-bold  transition duration-300 ease-in" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}">
                                        Logout
                                    </a>
                                </div>
                            @endauth
                        </h5>
                        <form class="" action="{{ route('logout') }}" id="logout-form" method="post">
                            @csrf
                    
                        </form>
                    </div>
                </div>
            </nav>

            
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>