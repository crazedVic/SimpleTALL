<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Topic extends Component
{
    public $topic;

    public function render()
    {
        return view('livewire.topic');
    }
}
