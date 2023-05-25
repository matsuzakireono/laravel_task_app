<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/all.css')}}">

<h1>本一覧</h1>

<ul>
        @foreach ($books as $book )
        <li>タイトル:<a href="{{route('books.show',$book->id)}}">{{$book->title}}</a> 価格:{{$book->price}}円</li>
        @endforeach
</ul>

<a href="{{route('books.create')}}">登録画面へ</a>

