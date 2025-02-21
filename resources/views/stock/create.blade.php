<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    {{-- Halaman ini adalah formulir sederhana untuk menambahkan stok HP baru, di mana pengguna bisa mengisi merek, model, harga, dan jumlah stok, lalu menyimpannya dengan menekan tombol "Add Item". --}}
    
    <h1>Add Item</h1>


    <form action="{{ route('stock_hp.store') }}" method="POST">
        @csrf
        <label for="brand">Brand</label>
        <input type="text" name="brand" id="brand">
        <br>
        <label for="model">Model</label>
        <input type="text" name="model" id="model">
        <br>
        <label for="price">Price</label>
        <input type="text" name="price" id="price">
        <br>
        <label for="stock_quantity">Stock Quantity</label>
        <input type="text" name="stock_quantity" id="stock_quantity">
        <br>
        <button type="submit">Add Item</button>
    </form>
    <a href="{{ route('stock_hp.index') }}">Back to List</a>
</body>
</html>
