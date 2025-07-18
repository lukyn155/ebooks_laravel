<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Knihy</title>
    <style>
        body{font-family: sans-serif; margin: 2rem;}
        table{border-collapse: collapse; width: 100%;}
        th, td{border: 1px solid #ddd;padding: 8px;}
        th{background: #f2f2f2; text-align: left;}
    </style>
</head>
<body>
<h1>Seznam knih</h1>

<table>
    <thead>
        <tr>
            <th>Název</th>
            <th>Autor</th>
            <th>Přidáno</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->created_at->format('d.m.Y H:i') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
