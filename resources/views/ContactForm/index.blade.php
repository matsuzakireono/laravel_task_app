<h1>resources/views/ContactForm/index.blade.php</h1>
<p>お問い合わせ内容を入力してください</p>
{{-- エラー内容を配列として取得し、foreachで列挙する --}}
@foreach ($errors->all() as $error)
    <li> <span class="error">{{ $error }}</span></li>
@endforeach
<form action="{{route('contact.confirm')}}" method="POST">
    <div>
        <label for="name">お名前</label>
        <input type="text" name="name" id="name" value="{{old('name')}}">
         {{-- @if ($errors->has('項目名')) でエラーがあるかを判定 --}}
         @if ($errors->has('name'))
         <p class="error">*{{ $errors->first('name') }}</p>
     @endif
    </div>
    <div>
        <input type="submit" value="送信">
    </div>
    {{-- GET メソッド以外でリクエストする場合は、@csrfを含める --}}
    @csrf
</form>
