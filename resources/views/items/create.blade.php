<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
        <br>
        <button type="submit">Add Item</button>
    </form>
    <a href="{{ route('items.index') }}">Back to List</a>
</body>
</html>
