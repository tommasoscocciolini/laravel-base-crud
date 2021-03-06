<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                flex-direction: column;
                flex-wrap: wrap;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .card{
              text-decoration: none;
              color: black;
            }
        </style>
    </head>
    <body>
      <div class="flex-center full-height">
        <h1>{{$comic->title}}</h1>
        <img src="{{$comic->thumb}}" alt="" height="500">
        <h4><b>{{$comic->title}}</b> <i><small>Price: {{$comic->price}}</small></i></h4>
        <p>{{$comic->description}}</p>
        <a class="card" href="{{route('comics.edit', ['comic'=> $comic->id])}}">Edit</a>
        <a href="{{route('comics.index')}}">Back</a>
      </div>
    </body>
</html>
