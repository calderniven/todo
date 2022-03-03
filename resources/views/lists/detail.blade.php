<x-layout>
    <x-slot:title>
        list detail
    </x-slot:title>

    <h1>{{ $list->name }}</h1>

    <form action="/todos/create" method="POST">
        @csrf
        <input type="hidden" name="list_id" value="{{ $list->id }}">
        <input type="text" name="title" id="title" placeholder="todo title">
        <button type="submit">add todo</button>
    </form>

    <ul>
        @foreach ($list->todos()->get() as $todo)
            <li>
                @if ($todo->completed_at == null)
                    {{ $todo->title }}
                @else
                    <strike>{{ $todo->title }}</strike>
                @endif
                
                <form action="/todos/complete/{{ $todo->id }}" method="POST">
                    @method('PATCH')
                    @csrf
                    @if ($todo->completed_at == null)
                        <button type="submit">Mark as Completed</button>
                    @else
                        <button type="submit">Undo</button>
                    @endif
                </form>
            </li>
        @endforeach
    </ul>

</x-layout>
