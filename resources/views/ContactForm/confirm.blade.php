<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('css/all.css')}}">
<h1>resources/views/ContactForm/confirm.blade.php</h1>
<p>お問い合わせ内容確認</p>
<ul>
    <li>
        お名前：
        <p>{{$request->name}}</p>
    </li>
    <button class="btn btn-primary" type="button" onClick="history.back()">
        <i class="fa-solid fa-caret-left"></i>
        戻る
    </button>
</ul>
