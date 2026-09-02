<!DOCTYPE html>
<html>
<head>
    <title>Book Filter</title>
</head>
<body>

    <h1>Book Filter</h1>

    <p>Name: Amor Tonio</p>

    @if ($genre)
        <h2>Showing books in genre: {{ $genre }}</h2>
    @else
        <h2>Showing all books</h2>
    @endif

    @if (count($books) > 0)

        <table border="1" cellpadding="10">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Genre</th>
            </tr>

            @foreach ($books as $book)
                <tr>
                    <td>{{ $book['id'] }}</td>
                    <td>
                        <a href="{{ route('books.show', $book['id']) }}">
                            {{ $book['title'] }}
                        </a>
                    </td>
                    <td>{{ $book['author'] }}</td>
                    <td>{{ $book['year'] }}</td>
                    <td>{{ $book['genre'] }}</td>
                </tr>
            @endforeach
        </table>

    @else

        <p>No books found for this genre.</p>

    @endif

    <br>

    <a href="{{ route('books.index') }}">Back to Book List</a>

</body>
</html>