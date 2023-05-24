<ul>
    <li>タイトル:{{$book->title}}</li>
    <li>価格:{{$book->price}}円</li>
</ul>
<a href="{{ route('books.index') }}">一覧に戻る</a>
<a href="{{route('books.edit', $book->id)}}">編集</a>
<form action="{{route('books.destroy',$book->id)}}" method="post">
@csrf
@method('delete')
<button>削除</button>
</form>
