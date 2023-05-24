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

確認
<form action="{{route('contact.store')}}" method="post">
@csrf
<div>名前: {{ $request->name }}</div>
<div>メール: {{ $request->email }}</div>
<div>性別: {{ $request->gender }}</div>
<div>年齢: {{ $request->age }}</div>
<div>お問合せ内容: {{ $request->message }}</div>

<input type="hidden" name="name" value="{{ $request->name }}" />
<input type="hidden" name="email" value="{{ $request->email }}" />
<input type="hidden" name="gender" value="{{ $request->gender }}" />
<input type="hidden" name="age" value="{{ $request->age }}" />
<input type="hidden" name="message" value="{{ $request->message }}" />
<button>送信</button>
</form>
