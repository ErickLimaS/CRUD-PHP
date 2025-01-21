<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | PHP CRUD</title>
    @vite('resources/css/app.css')
</head>

<body>

    <x-layout.container>

        <x-slot:child>

            <div>

                <h1 class="my-16 text-center text-4xl font-semibold">Login to PHP CRUD</h1>

                <div class="max-w-[400px] mx-auto py-12 px-6 bg-white rounded-lg shadow-md">
                    <form action="/login" method="POST" class="grid gap-16">
                        @csrf
                        <div class="grid gap-4">
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
                        </div>

                        <button type="submit"
                            class="mt-4 bg-black text-white font-semibold p-2 hover:scale-105 transition-transform">Login</button>
                    </form>
                </div>

            </div>

        </x-slot:child>

    </x-layout.container>

</body>

</html>
