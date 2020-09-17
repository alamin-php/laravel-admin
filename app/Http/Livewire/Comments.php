<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Comment;
use Auth;
use Livewire\WithFileUploads;


class Comments extends Component
{
        use WithFileUploads;

    public $details;
    public $image;
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'details' => 'required|max:225',
            'image' => 'image|mimes:jpg,png,jpeg|max:1024',
        ]);
    }
    public function addComment(){
        $validatedData = $this->validate([
            'details' => 'required|max:225',
            'image' => 'image|mimes:jpg,png,jpeg|max:1024',

        ]);

        $filePath = $this->image->store('public/comment');
       $addComment = Comment::create([
            'details' => $this->details,'user_id' => Auth::user()->id,'image' => $filePath,
        ]);
            if ($addComment) {
            Toastr::success('Data Successfully Inserted', 'Success');
            return redirect()->back();
        } else {
            return redirect()->back();
        }

        $this->details = null;
        $this->image = '';
        // return redirect()->to('/view-comment');
        session()->flash('message', 'Comment send successfully.');
    }


    public function render()
    {
        return view('livewire.comments');
    }
}
