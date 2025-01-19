<header class="py-4 mb-4 border-b-2 border-black">

    <nav class="flex justify-between items-center">

        <a href="/" class="py-4 font-medium hover:scale-110">HOME</a>

        @auth
            <p class="max-sm:hidden font-semibold text-xl">{{ auth()->user()->name }}</p>

            <form action="/logout" method="POST">
                @csrf
                <button
                    class="p-4 font-medium bg-red-500 text-white hover:scale-110 hover:rounded-md hover:shadow-md transition-all">LOGOUT</button>
            </form>
        @else
            <div>
                <a href="/login-account"
                    class="p-4 font-medium bg-black text-white hover:scale-110 hover:rounded-md hover:shadow-md transition-all">LOGIN</a>
            </div>
        @endauth

    </nav>

</header>
