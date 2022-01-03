<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="books/create">Them Moi</a>
<table border="1px">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Code</th>
        <th>Author</th>
        <th colspan="3">Action</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->code}}</td>
            <td>{{$book->author}}</td>
            <td><a href="books/{{$book->id}}/detail">Detail</a></td>
            <td><a href="books/{{$book->id}}/update">Update</a></td>
            <td><a href="books/{{$book->id}}">Delete</a></td>
        </tr>
    @endforeach
</table>

</body>
</html>
