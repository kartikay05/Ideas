<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Idea $idea)
    {
        // dd(request()->all());
        $validate = request()->validate(
            [
                'content' => 'required|string|min:5|max:240'
            ]
        );

        $comment = new Comment();
        $comment->idea_id = $idea->id;
        $comment->user_id = auth()->id();
        $comment->content = $validate['content'];
        $comment->save();

        return redirect()->route('ideas.show', $idea->id)->with('success', 'Comment posted successfully');
    }
}
