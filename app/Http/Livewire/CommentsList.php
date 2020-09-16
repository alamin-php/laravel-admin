<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;

class CommentsList extends Component
{
    public $allComments;

    public function mount(){
        $this->allComments = Comment::latest()->get();
    }

    public function remove($commentId){
        $removeComment = Comment::where('id', $commentId);
        $this->allComments = $this->allComments->except($commentId);
        $removeComment->delete();
    }

    public function render()
    {
        return view('livewire.comments-list');
    }
}
