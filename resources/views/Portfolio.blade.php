<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portfolio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            img {
                width: 100%;
                height: 100%;
                display: block;
                border-radius: 15px;
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
                padding: 50px 25px;
            }

            .wrapper_cards {
                /* border: 2px solid red; */
                display: flex;
                flex-wrap: wrap;
                gap: 40px;
            }

            .card {
                flex-basis: calc(100% / 3 - 40px);
                flex-grow: 1;
                flex-shrink: 1;
                color: white;
                background-color: #1F1F1F;
                padding: 15px 0;
                padding-top: 0;
                border-radius: 10px;
                box-shadow: 0 0 10px black;
            }

            .img_wrapper {
                width: 100%;
                height: 300px;
                margin-bottom: 20px;
            }

            .img_wrapper img {
                object-fit: cover;
                object-position: center;
            }

            .description_wrapper {
                padding: 0 10px;
            }

            .description_wrapper h2 {
                font-size: 20px;
                margin-bottom: 10px;
            }

            .active {
                color: greenyellow;
            }
        </style>
    </head>

    @php
        // Array card portfolio
        $arrayCardPortfolio = [
            [
                'img' => 'https://img.freepik.com/free-psd/red-neon-text-effect_125540-1619.jpg?t=st=1649709822~exp=1649710422~hmac=aed46f017ed68c87b2dea0b957fbcd443db5350b41187801a39c6bdb9841cf63&w=1380',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis suscipit necessitatibus aspernatur perferendis numquam autem dicta ducimus.',
                'title' => 'Lorem Ipsum',
            ],

            [
                'img' => 'https://img.freepik.com/free-photo/black-friday-sale-banner_87374-119.jpg?t=st=1649712394~exp=1649712994~hmac=c99013e3a20745886b85e23ea4d3813ff9cde0a06e77e79b5795645f7fe7276e&w=1380',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis suscipit necessitatibus aspernatur perferendis numquam autem dicta ducimus.',
                'title' => 'Lorem Ipsum',
            ],

            [
                'img' => 'https://img.freepik.com/free-vector/tropical-lettering-with-neon-leaves-background_52683-37847.jpg?t=st=1649712394~exp=1649712994~hmac=e1917a8d22b87bd49f2bc592b4437df09e3546edaaf04035c78c82dc024e481b&w=1380',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis suscipit necessitatibus aspernatur perferendis numquam autem dicta ducimus.',
                'title' => 'Lorem Ipsum',
            ],
        ];
    @endphp

    <body>

        
        
        {{-- Header --}}
        <header>

            {{-- Menu --}}
            <ul class="menu">
                <li>
                    <a href="{{route('Home')}}">Home</a>
                </li>

                <li>
                    <a href="{{route('AboutMe')}}">About me</a>
                </li>

                <li>
                    <a class="active" href="{{route('Portfolio')}}">Portfolio</a>
                </li>

                <li>
                    <a href="{{route('Contact')}}">Contact</a>
                </li>
            </ul>

        </header>

        {{-- Main --}}
        <main>

            {{-- Wrapper cards --}}
            <div class="wrapper_cards">

                {{-- Ciclo for array card --}}
                @for ($i = 0; $i < count($arrayCardPortfolio); $i++)

                    {{-- Card --}}
                    <div class="card">

                        {{-- Img wrapper --}}
                        <figure class="img_wrapper">
                            <img src="{{$arrayCardPortfolio[$i]['img']}}" alt="">
                        </figure>

                        {{-- Description wrapper --}}
                        <div class="description_wrapper">
                            <h2>{{$arrayCardPortfolio[$i]['title']}}</h2>
                            <p>{{$arrayCardPortfolio[$i]['description']}}</p>
                        </div>

                    </div>
                @endfor

            </div>
            
        </main>
        
    </body>
</html>
