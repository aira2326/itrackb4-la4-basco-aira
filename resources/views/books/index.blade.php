<!DOCTYPE html>
<html>
<head>
    <title>Book List</title>
</head>
<body>

    <h1>Book List</h1>

    <p>Name: Amor Tonio</p>

    <p>
        <a href="{{ route('books.featured') }}">Featured Book</a>
    </p>

    <p>
        <a href="{{ route('books.filter') }}">Show All Books</a>
    </p>

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

</body>
</html>