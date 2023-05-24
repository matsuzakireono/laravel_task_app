<h1>本を編集</h1>
<form action="{{route('books.update',$book->id)}}" method="POST">
@csrf
@method('put')
    <div>
        <label for="title">本のタイトル</label>
        <input type="text" id="title" name="title" value="{{$book->title}}">
    </div>
    <div>
        <label for="price">本の価格</label>
        <input type="number" id="price" name="price" value="{{$book->price}}">円
    </div>
    <button>登録</button>
</form>
