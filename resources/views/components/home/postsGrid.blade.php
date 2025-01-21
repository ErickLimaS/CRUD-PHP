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
            <x-home.postCard :id="$post->id" :title="$post->title" :body="$post->body" />
        @endforeach
    </ul>

</div>
