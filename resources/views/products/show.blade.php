<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        <div>
            <table border="2">
                <tr>
                    <td>#:</td>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <td>Description:</td>
                    <td>{{ $product->description }}</td>
                </tr>
                <tr>
                    <td>Category:</td>
                    @foreach ($product->categories as $category)
                        <td>{{ $category->name }}</td>
                    @endforeach
                </tr>
            </table>
            <br/>
            <button><a href="{{ route('products.index') }}">Back</a></button>
        </div>
    </body>
</html>