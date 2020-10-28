@extends('layout.main')
    
@section('title')
    Create Book
@endsection

    <style>
        .form-field {
            margin: 30px;
        }
    </style>

@section('main')
    <form action="{{route('books.store')}}" method="POST">

        @csrf
        @method('POST')

        <div class="form-field">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="Titolo">
            <label for="autohr">Autore</label>
            <input type="text" name="autohr" id="autohr" placeholder="Autore">
        </div>

        <div class="form-field">
            <label for="edition">Edizione</label>
            <input type="text" name="edition" id="edition" placeholder="Edizione">
            <label for="image">URL immagine</label>
            <input type="text" name="image" id="image" placeholder="URL immagine">
        </div>

        <div class="form-field">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" id="isbn" placeholder="ISBN">
            <label for="pages">Pagine</label>
            <input type="text" name="pages" id="pages" placeholder="Pagine">
        </div>

        <div class="form-field">
            <label for="year">Data</label>
            <input type="date" name="year" id="year" placeholder="Anno">
            <label for="genre">Genere</label>
            <input type="text" name="genre" id="genre" placeholder="Genere">
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
@endsection


