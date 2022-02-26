<x-layout>
    <x-slot:title>
        All Todo Lists
    </x-slot:title>

    This is a great list of lists!

    <a href="/todo-lists/create">create new list</a>

    <ul>
        @foreach ($lists as $list)
            <li><a href="/todo-lists/{{ $list->id }}">{{ $list->name }}</a></li>
        @endforeach
    </ul>
</x-layout>