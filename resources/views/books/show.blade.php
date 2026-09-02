<!DOCTYPE html>
<html>
<head>
    <title>{{ $book['title'] }}</title>
</head>
<body>

    <h1>Book Details</h1>

    <p>Name: Amor Tonio</p>

    <hr>

    <p><strong>ID:</strong> {{ $book['id'] }}</p>
    <p><strong>Title:</strong> {{ $book['title'] }}</p>
    <p><strong>Author:</strong> {{ $book['author'] }}</p>
    <p><strong>Year:</strong> {{ $book['year'] }}</p>
    <p><strong>Genre:</strong> {{ $book['genre'] }}</p>

    <br>

    <a href="{{ route('books.index') }}">Back to Book List</a>

</body>
</html>