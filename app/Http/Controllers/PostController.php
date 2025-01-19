<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function createPost(Request $request)
    {

        $postFormFields = $request->validate([
            'title' => ['required', 'max:85'],
            'body' => ['required', 'max:865'],
        ]);

        $postFormFields['title'] = strip_tags($postFormFields['title']);
        $postFormFields['body'] = strip_tags($postFormFields['body']);
        $postFormFields['user_id'] = auth()->id();

        Post::create($postFormFields);

        return redirect("/");
    }
}
