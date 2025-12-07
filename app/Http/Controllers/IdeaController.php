<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    public function edit(Idea $idea)
    {
        $editing = true;
        return view('ideas.show', compact('idea', 'editing'));
    }

    public function show(Idea $idea)
    {
        return view('ideas.show', compact('idea'));
    }

    public function store()
    {
        $validated = request()->validate([
            'content' => 'required|string|min:5|max:240'
        ]);

        $validated['user_id'] = auth()->id();

        Idea::create($validated);

        return redirect()->route('dashboard')->with('success', 'Idea submitted successfully!');
    }

    public function update(Idea $idea)
    {

        if (auth()->id() !== $idea->user_id) {
            abort(404);
        }

        $validated = request()->validate([
            'content' => 'required|string|min:5|max:240'
        ]);

        $idea->update($validated);
        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea Updated successfully');
    }

    public function destroy(Idea $idea)
    {
        if (auth()->id() !== $idea->user_id) {
            abort(404);
        }
        
        $idea->delete();
        return redirect()->route('dashboard')->with('destroy', 'Idea deleted successfully!');
    }
}
