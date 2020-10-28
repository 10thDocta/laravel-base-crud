@extends('layout.main')

@section('title')
    Books
@endsection

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .scheda {
            margin-top: 30px;
            margin-left: 30px;
            width: 500px;
            padding-bottom: 10px;
            border-bottom: 2px solid rgb(39, 121, 121);
        }

        .title, .author {
            text-align: center
        }

        img {
            display: block; 
            max-width: 500px;
        }
    </style>

    
@foreach ($books as $book)
    <div class="scheda">
        <h2 class="title">{{$book->title}} </h2>
        <h3 class="author"><em>{{$book->autohr}} </em></h3>
        <small class="edition">Edizione: {{$book->edition}}</small>
        <a href="{{route('books.show', $book->id)}} "><img src="{{$book->image}} " alt=""></a>
    </div>
@endforeach

</body>
</html>