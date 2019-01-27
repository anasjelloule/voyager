<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <meta name="keyword" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .slide-enter {
            transform: translateY(40px);
            /* transition: transform 10s; */
        }


        .slide-enter-active {
            animation: slide-in 1s ease-in-out forwards;
            /* transition: opacity 1s; */
            /* opacity: 1; */
        }

        .slide-leave {}

        .slide-leave-active {
            animation: slide-out 1s ease-out forwards;
        }

        @keyframes slide-out {
            from {
                /* transform: translateY(0); */
                opacity: 1;
            }
            to {
                opacity: 0;
                /* transform: translateY(40px); */
            }
        }

        @keyframes slide-in {
            from {
                opacity: 0;
                /* transform: translateY(40px); */
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div id="app">
        <header class="bg-dark">
            <nav class="navbar container navbar-expand-lg navbar-dark ">
                <router-link class="navbar-brand" :to="{name:'acceuil'}">Anas</router-link>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    {{-- {{ dd(menu('menu_front')) }} --}}
                    <front-menu></front-menu>
                </div>
            </nav>
        </header>
        <main role="main" class="my-5">
            <transition name="slide" mode="out-in">

                <router-view></router-view>

            </transition>

        </main>
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">

                    <div class="col-md-4">anas</div>
                    <div class="col-md-4">anas</div>
                    <div class="col-md-4">anas</div>
                    <div class="col-md-4">anass</div>
                </div>
            </div>
        </footer>
    </div>
    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>