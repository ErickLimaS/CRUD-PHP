@php
    use App\Models\Post;
    use App\Http\Controllers\UserController;

    if (auth()->check()) {
        $posts = auth()->user()->usersPosts()->latest()->get();
    }
@endphp

<div>
    <h2 class="mb-8 text-2xl font-bold text-black/85 ">Posts</h2>

    <ul class="grid md:grid-cols-2 gap-x-4 gap-y-8">
        @foreach ($posts as $post)
            <li class="mb-4 p-4 flex flex-col gap-y-4 border-2 bg-white border-black/25 rounded-md shadow-md">
                <div>
                    <h3 class="text-xl font-semibold">{{ $post->title }}</h3>
                </div>

                <div>
                    <p>{{ $post->body }}</p>
                </div>
            </li>
        @endforeach
    </ul>

</div>
