<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            padding-top: 20px;
        }

        .btn-back {
            margin: 20px;
            padding: 10px 15px;
            color: white;
            background-color: rgb(7, 7, 136);
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-back:hover {
            background-color: rgb(31, 31, 184);
        }

        .scheda {
            margin-top: 30px;
            margin-left: 30px;
            width: 500px;
            padding-bottom: 10px;
        }

        .title, .author {
            text-align: center
        }

        small {
            display: block;
        }

        small:first-of-type {
            margin-top: 30px;
        }

        img {
            display: block; 
            max-width: 500px;
        }
    </style>
</head>

<body>

    <a class="btn-back" href="{{route('books.index')}}">Ritorna</a>
    
    <div class="scheda">
        <h2 class="title">{{$book->title}} </h2>
        <h3 class="author"><em>{{$book->autohr}} </em></h3>
        <small class="edition">Edizione: {{$book->edition}}</small>
        <small class="edition">Anno: {{$book->year}}</small>
        <small class="edition">Genere: {{$book->genre}}</small>
        <small class="edition">Pagine: {{$book->pages}}</small>
        <img src="{{$book->image}} " alt="{{$book->title}} image">
    </div>


    <form action="{{route('books.destroy', $book->id)}} " method="post">
        @csrf
        @method('DELETE')

        <input type="submit" value="Cancella" onclick="return confirm('Sicuro di voler cancellare?')">
    </form>

</body>
</html>

