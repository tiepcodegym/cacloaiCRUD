<form action="" method="post">
    @csrf
    <input type="text" name="title"  value="{{$book->title}}">
    <input type="text" name="code" value="{{$book->code}}">
    <input type="text" name="author"  value="{{$book->author}}">
    <button type="submit">Sua</button>
    <a href="{{ route("books.index") }}">quay lai</a>
</form>

