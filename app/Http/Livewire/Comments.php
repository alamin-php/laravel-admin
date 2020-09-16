<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;

class Comments extends Component
{
    public $details;
    public function addComment(){
        Comment::create([
            'details' => $this->details,
        ]);

        $this->details = null;
        return redirect()->to('/view-comment');
    }


    public function render()
    {
        return view('livewire.comments');
    }
}
