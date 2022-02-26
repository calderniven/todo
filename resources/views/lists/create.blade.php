<x-layout>
    <x-slot:title>
        create new list
    </x-slot:title>

    This is a great form!

    <form action="" method="POST">
        {{ csrf_field() }}
        <input type="text" name="name">
        <button type="submit">create</button>
    </form>
</x-layout>