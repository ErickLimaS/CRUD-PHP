@props(['id', 'title', 'body'])

<li class="mb-4 p-4 flex flex-col gap-y-4 border-2 bg-white border-black/25 rounded-md shadow-md">
    <div>
        <h3 class="text-xl font-semibold">{{ $title }}</h3>
    </div>

    <div>
        <p>{{ $body }}</p>
    </div>

    <div class="grid grid-cols-[3fr,1fr] gap-4 items-center content-center">
        <a href="/edit-post/{{ $id }}"
            class="flex items-center h-full py-2 px-4 bg-black border-2 border-black text-white rounded-lg hover:bg-white hover:text-black  transition-colors duration-200 text-center font-medium shadow-md hover:shadow-lg">Edit</a>

        <form action="/delete-post/{{ $id }}" method="POST">
            @csrf
            @method('DELETE')
            <button
                class="w-full p-2 bg-red-500 text-white rounded-lg hover:bg-red-400 transition-colors duration-200 font-medium shadow-md hover:shadow-lg">Delete</button>
        </form>
</li>
