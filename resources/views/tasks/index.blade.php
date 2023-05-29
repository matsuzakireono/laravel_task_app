<!-- tasks/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-end px-4 py-4">
                    <button id="add-task-btn" class="bg-green-500 hover:bg-green-700 text-black font-bold py-2 px-4 rounded">
                        +
                    </button>
                </div>

                <div id="task-form" class="hidden px-4 py-4">
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <input type="text" name="task_content" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 mb-4" placeholder="タスク内容">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                            追加
                        </button>
                        <button type="button" id="cancel-task-btn" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                            キャンセル
                        </button>
                    </form>
                </div>

                <ul>
                    @foreach ($tasks as $task)
                        <li>{{ $task->task_content }}</li>
                    @endforeach
                </ul>

                <table>
                    <!-- Table body -->
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#add-task-btn").click(function() {
                $("#task-form").toggleClass("hidden");
            });
            $("#cancel-task-btn").click(function() {
                $("#task-form").toggleClass("hidden");
            });
        });
    </script>
</x-app-layout>
