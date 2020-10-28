<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div {
            margin: 30px;
        }
    </style>
</head>
<body>
    
<form action="{{route('books.store')}}" method="POST">

    @csrf
    @method('POST')

    <div>
        <input type="text" name="title" placeholder="Titolo">
        <input type="text" name="autohr" placeholder="Autore">
    </div>

    <div>
        <input type="text" name="edition" placeholder="Edizione">
        <input type="text" name="image" placeholder="URL immagine">
    </div>

    <div>
        <input type="text" name="isbn" placeholder="ISBN">
        <input type="text" name="pages" placeholder="Pagine">
    </div>

    <div>
        <input type="date" name="year" placeholder="Anno">
        <input type="text" name="genre" placeholder="Genere">
    </div>

    <div>
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

</body>
</html>