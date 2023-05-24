<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/all.css')}}">
<h1>本を登録</h1>
<form action="{{route('books.store')}}" method="POST">
@csrf
    <div>
        <label for="title">本のタイトル</label>
        <input type="text" id="title" name="title" value="{{ old('title')}}">
    </div>
    <div>
        <label for="price">本の価格</label>
        <input type="number" id="price" name="price" value="{{ old('price')}}円">
    </div>
    <button>登録</button>
</form>
