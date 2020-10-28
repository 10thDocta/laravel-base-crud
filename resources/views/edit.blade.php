@extends('layout.main')

@section('title')
    Edit {{$book->title}}
@endsection

    <style>

        body {
            display: flex;
            flex-basis: 50%;
        }

        .form-field {
            margin: 30px;
        }

        img {
            max-width: 300px;
        }
    </style>


@section('main')

    <a class="btn-back" href="{{route('books.show', $book->id)}}">Ritorna</a>

<div class="box-left">

    <form action="{{route('books.update', $book->id)}}" method="POST">
    
        @csrf
        @method('PUT')
    
        <div class="form-field">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="Titolo" value="{{$book->title}}">

            <label for="autohr">Autore</label>
            <input type="text" name="autohr" id="autohr" placeholder="Autore" value="{{$book->autohr}}">
        </div>

        <div class="form-field">
            <label for="edition">Edizione</label>
            <input type="text" name="edition" id="edition" placeholder="Edizione" value="{{$book->edition}}">

            <label for="image">URL immagine</label>
            <input type="text" name="image" id="image" placeholder="URL immagine" value="{{$book->image}}">
        </div>

        <div class="form-field">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" placeholder="ISBN" value="{{$book->isbn}}">

            <label for="pages">Pagine</label>
            <input type="text" name="pages" id="pages" placeholder="Pagine" value="{{$book->pages}}">
        </div>

        <div class="form-field">
            <label for="year">Data</label>
            <input type="date" name="year" id="year" placeholder="Anno" value="{{$book->year}}">

            <label for="genre">Genere</label>
            <input type="text" name="genre" id="genre" placeholder="Genere" value="{{$book->genre}}">
        </div>

        <div class="form-field">
            <input type="submit" value="Salva"> 
        </div>
    
    </form>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<div class="box-rigth">
    <img src="{{$book->image}}" alt="">
</div>

@endsection
    

