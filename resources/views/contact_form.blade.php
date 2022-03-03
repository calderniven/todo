<x-layout>
    <x-slot:title>Contact Page</x-slot:title>

    This is a great contact page!

    <form action="" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="message">Your message</label>
            <textarea name="message" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Send message</button>
    </form>
</x-layout>
