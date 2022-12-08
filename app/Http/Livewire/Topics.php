<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Topics extends Component
{
    public function mount(){
        // on reload of page, reset the session counter
       Session::forget("counter");
    }

    public function render()
    {
        return view('livewire.topics');
    }
}
