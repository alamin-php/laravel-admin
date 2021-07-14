<?php

namespace App\Http\Livewire;

use App\Computer;
use Livewire\Component;

class Computer extends Component
{

public $data, $name, $designation, $section, $ip;
    public $updateMode = false;

        public function mount(){
        $this->data = Computer::latest()->get();
    }

    public function render()
    {
        return view('livewire.computer');
    }
}
