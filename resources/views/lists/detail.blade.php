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
                {!! $todo->getDisplayTitle() !!}
                
                <form action="/todos/complete/{{ $todo->id }}" method="POST">
                    @method('PATCH')
                    @csrf
                        <button type="submit">
                            {{ $todo->getToggleButtonText() }}
                        </button>
                </form>
            </li>
        @endforeach
    </ul>

</x-layout>
