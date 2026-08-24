<!DOCTYPE html>
<html>
<head>
    <title>My Product List</title>
</head>
<body>

    <h1>My Product List</h1>

    <p>Prepared by: Shella Mae Boridas</p>

    <table border="1" cellpadding="8">
        <tr>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>

        @foreach ($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>₱{{ $product['price'] }}</td>
                <td>{{ $product['quantity'] }}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>