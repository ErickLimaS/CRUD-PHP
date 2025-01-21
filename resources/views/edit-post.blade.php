<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post | CRUD PHP</title>
    @vite('resources/css/app.css')
</head>

<body>

    <x-layout.container>

        <x-slot:child>

            <h1 class="my-16 text-center text-4xl font-semibold">Edit Post</h1>

            <div>
                <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
                    <form action="/edit-post/{{ $post->id }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700">
                                Post Title
                                <input type="text" name="title" id="title" value="{{ $post->title }}"
                                    class="mt-1 p-4 block w-full border-2 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </label>
                        </div>
                        <div>
                            <label for="body" class="block text-sm font-medium text-gray-700">
                                Post body
                                <textarea name="body" id="body" rows="8" class="mt-1 p-4 block w-full border-2 shadow-sm">{{ $post->body }}</textarea>
                            </label>
                        </div>
                        <div class="flex justify-end">
                            <button type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Update Post
                            </button>
                        </div>
                    </form>
                </div>

        </x-slot:child>

    </x-layout.container>

</body>

</html>
