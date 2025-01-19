<div>
    <div class="max-w-md mx-auto bg-white p-8 mb-8 rounded-lg shadow-lg ">
        <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Create New Post</h2>
        <form action="/create-post" method="POST" class="grid gap-4">
            @csrf
            <div>
                <label class="flex flex-col font-semibold">
                    Title
                    <input type="text" id="title" name="title" required class="p-2 border-2">
                </label>
            </div>
            <div>
                <label class="flex flex-col font-semibold">
                    Post Body
                    <textarea id="body" name="body" required class="p-2 border-2" placeholder="Your text..."></textarea>
                </label>
            </div>
            <div>
                <button type="submit" class="p-2 w-full bg-black text-white font-semibold rounded-sm hover:scale-105 transition-transform">Create Post</button>
            </div>
        </form>
    </div>
</div>
