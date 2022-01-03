<form action="" method="post">
    @csrf
    <input type="text" name="title" placeholder="Nhap title">
    <input type="text" name="code" placeholder="Nhap code">
    <input type="text" name="author" placeholder="Nhap author">
    <button type="submit">Them</button>
    <a href="{{route("books.index")}}">Quay lai</a>
</form>
