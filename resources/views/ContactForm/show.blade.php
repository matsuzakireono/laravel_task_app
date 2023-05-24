<ul>
    <li>{{$contact->name}}</li>
    <li>{{$contact->email}}</li>
    <li>{{$contact->gender}}</li>
    <li>{{$contact->age}}</li>
    <li>{{$contact->message}}</li>
</ul>

<a href="{{ route('contact.index') }}">一覧に戻る</a>
<a href="{{route('contact.edit', $contact->id)}}">編集</a>
<form action="{{route('contact.delete',$contact->id)}}" method="post">
@csrf
<button>削除</button>
</form>
