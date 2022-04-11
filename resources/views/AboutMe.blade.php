<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Me</title>

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

            .wrapper {
                /* border: 2px solid red; */
                color: white;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 10px;
                padding: 0 20px;
            }

            .img_wrapper {
                width: 300px;
            }

            .description {
                text-align: center;
            }

            .description .name {
                margin-bottom: 10px;
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
                    <a href="{{route('Home')}}">Home</a>
                </li>

                <li>
                    <a class="active" href="{{route('AboutMe')}}">About me</a>
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

            {{-- Wrapper --}}
            <div class="wrapper">

                {{-- Img User --}}
                <figure class="img_wrapper">
                    <img src="https://picsum.photos/300" alt="">
                </figure>

                {{-- Description --}}
                <div class="description">
                    <h2 class="name">Lorem Ipsum</h2>
                    <p class="text">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium minus ducimus commodi sunt. Magnam, consequatur perspiciatis illum natus, ducimus illo accusantium harum molestias expedita sint suscipit deserunt, similique et tenetur.
                        Facere doloribus, sed possimus porro, provident enim dolor molestiae repellendus ratione temporibus quam repellat illo, voluptates placeat iure aut architecto ex. Ex aut sed unde illum accusantium explicabo mollitia quo?
                        Illo error explicabo tenetur facilis amet repellendus consectetur, quam iure, animi asperiores deleniti, eius et tempore! Debitis explicabo, asperiores temporibus perferendis rem aut sequi error repudiandae? Sit, eligendi. Ducimus, neque.
                    </p>
                </div>

            </div>

        </main>



    </body>
</html>
