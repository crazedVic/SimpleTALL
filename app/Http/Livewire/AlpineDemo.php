<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AlpineDemo extends Component
{

    public $message = "";
    public $name = "";

    public function render()
    {
        return view('livewire.alpine-demo');
    }

    public function submit(){
        $this->message = "hello ". $this->name;
    }
}
