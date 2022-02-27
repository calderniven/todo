<x-layout>
    <x-slot:title>
        list detail
    </x-slot:title>

    <h1>{{ $list->name }}</h1>

    <form action="/todos/create" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="list_id" value="{{ $list->id }}">
        <input type="text" name="title" id="title" placeholder="todo title">
        <button type="submit">add todo</button>
    </form>

</x-layout>
