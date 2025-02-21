<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock List</title>
</head>
<body>

    {{--  --}}

    <h1>Stocks</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <a href="{{ route('stock_hp.create') }}">Add Stock</a>
    <ul>
        @foreach ($stock as $stock)
        <li>
                {{ $stock->brand }} |
                {{ $stock->model }} |
                {{ $stock->price }} |
                {{ $stock->stock_quantity }} |
            <a href="{{ route('stock_hp.edit', $stock->id) }}">Edit</a>
            <form action="{{ route('stock_hp.destroy', $stock->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
</body>
</html>
