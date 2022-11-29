<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        //  dd(request()->all());
        dd($post->id);

        request()->validate([
            'body' => 'required'
        ]);

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'post_id' => $post->id,
            'body' => request('body')
        ]);

        return back();
    }
}
