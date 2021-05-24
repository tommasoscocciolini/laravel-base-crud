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
        </style>
    </head>
    <body>
      <div class="links flex-center full-height">
        <form class="" action="{{route('comics.update', ['comic'=> $comic->id])}}" method="post">
          @csrf
          @method('patch')
          <input type="text" name="title" value="{{$comic->title}}" placeholder="titolo">
          <input type="text" name="description" value="{{$comic->description}}" placeholder="desc">
          <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="src">
          <input type="float" name="price" value="{{$comic->price}}" placeholder="price">
          <input type="number" name="series" value="{{$comic->series}}" placeholder="series">
          <input type="date" name="sale_date" value="{{$comic->sale_date}}">
          <input type="text" name="type" value="{{$comic->type}}">
          <input type="submit" name="" value="invia">
        </form>
        <a href="{{route('comics.index')}}">Back</a>
      </div>
    </body>
</html>
