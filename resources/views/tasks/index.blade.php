<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('タスク管理') }}
        </h2>
    </x-slot>
    <form action="{{route('tasks.index')}}" method="GET">
        <ul>
            @foreach ($tasks as $task )
            <li>{{$task->task_name}}</li>
            @endforeach
        </ul>
    </form>
    <form action="{{route('tasks.store')}}" method="GET">
        <input type="textare">
        <button>登録</button>
    </form>
</x-app-layout>
