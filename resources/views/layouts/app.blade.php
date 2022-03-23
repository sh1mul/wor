<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="">
        <header class="shadow-lg" >
            <div class="container flex mx-auto justify-between items-center py-2">
                <div class="flex justify-start items-center">
                   <a href="{{route('home')}}"><img class="max-h-12" src="{{asset('images/text-logo.png')}}" alt="Words of Root"></a>
                </div>
                <div class="grow items-center">
                    <x-nav-menu-dropdown/>
                </div>


                <div class="flex justify-end items-center">
                   <ul class="w-full flex justify-end">
                       @auth
                        <form action="{{route('logout')}}" method="POST">@csrf
                            <button type="submit">Logout</button>
                        </form>
                        @else
                        <li><a class="mx-1 px-4 py-2 text-lg outline outline-1 shadow-lg outline-red text-red rounded-lg" href="{{route('login')}}">লগিন</a></li>
                        <li><a class="mx-1 px-4 py-2 text-lg outline outline-1 shadow-lg outline-red text-red rounded-lg" href="{{route('register')}}">রেজিষ্টার</a></li>
                       @endauth

                   </ul>
                </div>
            </div>
        </header>
        <main class="bg-[url('/images/tree.png')] bg-no-repeat bg-opacity-30 bg-cover" style="background-blend-mode: overlay; background-color:rgb(255, 255, 255, 0.92);">
            <section class="px-5">
                <div class="container mx-auto flex flex-col justify-center items-center mt-28">
                    <div>
                        <img class="max-h-36"src="{{asset('images/wor.png')}}" alt="Words of Root Logo">
                    </div>
                    <div class="w-full mx-auto my-5">
                        <livewire:main-search/>
                    </div>

                </div>
            </section>
            <section class="px-5">
                {{$slot}}
            </section>
        </main>

        @livewireScripts
    </body>
</html>

