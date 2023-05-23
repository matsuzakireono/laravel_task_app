{{-- ダウンロードしてきたBootStrap のソースファイルを読み込む --}}
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

<h1>resources/views/ContactForm/confirm.blade.php</h1>
<p>お問い合わせ内容確認</p>
<ul>
    <li>
        お名前：
        <p>{{$request->name}}</p>
    </li>
   <!-- <form action="" method="POST">
        {{-- type="hidden" で、画面非表示の状態で入力内容を保持しておく --}}
        <input type="hidden" name="name" value="{{$request->name}}">
        <div>
            {{-- 戻るボタンにback というname属性を持たせておき、ボタンが押されたかどうかを判定できるようにする --}}
            <input type="submit" name="back" value="戻る">
        </div>
        @csrf
    </form>-->
    <button class="btn btn-primary" type="button" onClick="history.back()">戻る</button>
</ul>
