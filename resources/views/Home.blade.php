<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body {
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
                height: 100vh;
                display: flex;
                flex-direction: column;
            }

            header {
                /* border: 3px solid red; */
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: rgb(31, 31, 31);
                padding: 20px 0;
            }

            .menu {
                display: flex;
                flex-wrap: wrap;
                align-items: center;
                justify-content: center;
                gap: 55px;
                list-style: none;
            }

            a {
                text-decoration: none;
                text-transform: uppercase;
                font-weight: 600;
                color: #fff;
            }

            a:hover {
                color: greenyellow;
                transition: color 300ms ease-in-out;
            }

            main {
                flex-grow: 1;
                background-color: rgb(70, 70, 70);
                padding: 20px 25px;
            }

            main h1 {
                color: white;
                text-align: center;
            }

            .active {
                color: greenyellow;
            }
        </style>
    </head>
    <body>
        
        {{-- Header --}}
        <header>

            {{-- Menu --}}
            <ul class="menu">
                <li>
                    <a class="active" href="{{route('Home')}}">Home</a>
                </li>

                <li>
                    <a href="{{route('AboutMe')}}">About me</a>
                </li>

                <li>
                    <a href="{{route('Portfolio')}}">Portfolio</a>
                </li>

                <li>
                    <a href="http://">Contact</a>
                </li>
            </ul>

        </header>

        {{-- Main --}}
        <main>
            {{-- Title --}}
            <h1>{{$title}}</h1>
        </main>




    </body>
</html>
