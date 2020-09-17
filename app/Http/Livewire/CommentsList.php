<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;
use App\Http\Livewire\Storage;

class CommentsList extends Component
{
    public $allComments;
    public $searchTerm;

    public function mount(){
        $this->allComments = Comment::latest()->get();
    }

    public function remove($commentId){
        $removeComment = Comment::where('id', $commentId)->first();
        $this->allComments = $this->allComments->except($commentId);
        $removeComment->delete();
        session()->flash('message', 'Comment deleted successfully.');
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm. '%';
        $this->allComments = Comment::where('details', 'like', $searchTerm)->get();
        return view('livewire.comments-list');
    }
}
