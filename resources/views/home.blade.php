<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | PHP CRUD</title>
    @vite('resources/css/app.css')
</head>

<body>

    <x-layout.container>

        <x-slot:child>
            <main class="min-h-[70vh] grid lg:grid-cols-[1fr,3fr] gap-x-8">

                <div class="grid gap-y-8 lg:max-w-[360px]">
                    <div class="bg-[#000000] text-white p-8 mb-4 md:w-max h-min rounded-sm shadow-md shadow-black/50">
                        <h1 class="text-3xl font-semibold mb-4">PHP CRUD</h1>

                        <p class="text-xl">Create a user, update or delete it!</p>

                        <p class="text-xl">This is exactly made for practice!</p>
                    </div>

                    @auth
                        {{-- EMPTY --}}
                    @else
                        <div>

                            <h2 class="mb-4 pb-2 text-2xl font-semibold border-b-2 border-black/25">Create a user</h2>

                            <form action="/register" method="POST" class="grid gap-y-2 flex-col w-fill">
                                @csrf
                                <label class="flex flex-col font-semibold">
                                    Name
                                    <input type="text" name="name" placeholder="Name" required
                                        class="p-2 border-2 rounded-sm font-normal" />
                                </label>
                                <label class="flex flex-col font-semibold">
                                    Email
                                    <input type="email" name="email" placeholder="Email" required
                                        class="p-2 border-2 rounded-sm font-normal" />
                                </label>
                                <label class="flex flex-col font-semibold">
                                    Password
                                    <input type="password" name="password" placeholder="Password" required
                                        class="p-2 border-2 rounded-sm font-normal" />
                                </label>

                                <button type="submit"
                                    class="mt-4 bg-black text-white font-semibold p-2 hover:scale-105 transition-transform">Create</button>
                            </form>

                        </div>
                    @endauth

                </div>

                <div>

                    @auth
                        <x-home.postsSection />
                    @else
                        <h2 class="mb-8 text-2xl font-bold text-black/85 ">Posts</h2>
                        <p>You need to be logged in to see your posts</p>
                    @endauth

                </div>

            </main>
        </x-slot:child>

    </x-layout.container>

</body>

</html>
