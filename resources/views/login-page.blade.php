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

                <h1>Login to PHP CRUD</h1>

                <form action="/login" method="POST">
                    @csrf
                    <label class="flex flex-col font-semibold">
                        Email
                        <input type="email" name="email" placeholder="Email" required
                            class="p-2 rounded-sm font-normal" />
                    </label>
                    <label class="flex flex-col font-semibold">
                        Password
                        <input type="password" name="password" placeholder="Password" required
                            class="p-2 rounded-sm font-normal" />
                    </label>

                    <button type="submit"
                        class="mt-4 bg-black text-white font-semibold p-2 hover:scale-105 transition-transform">Create</button>
                </form>

            </div>

        </x-slot:child>

    </x-layout.container>

</body>

</html>
