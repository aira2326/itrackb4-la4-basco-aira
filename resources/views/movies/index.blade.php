<!DOCTYPE html>
<html>
<head>
    <title>My Movie List</title>
</head>
<body>

    <h1>My Movie List</h1>

    <p>Prepared by: Aira Basco</p>

    <table border="1" cellpadding="8">
        <tr>
            <th>Title</th>
            <th>Director</th>
            <th>Year</th>
        </tr>

        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie['title'] }}</td>
                <td>{{ $movie['director'] }}</td>
                <td>{{ $movie['year'] }}</td>
            </tr>
        @endforeach

    </table>

</body>
</html>