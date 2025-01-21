@props(['id', 'title', 'body'])

<li class="mb-4 p-4 flex flex-col gap-y-4 border-2 bg-white border-black/25 rounded-md shadow-md">
    <div>
        <h3 class="text-xl font-semibold">{{ $title }}</h3>
    </div>

    <div>
        <p>{{ $body }}</p>
    </div>

    <div>
        <a href="/edit-post/{{ $id }}">Edit</a>

        <form action="/delete-post/{{ $id }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
    </div>
</li>
