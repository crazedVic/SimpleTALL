<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Topic extends Component
{
    public $topic;
    public $body;

    public $rules =[
        "body" => "required|string|min:4"
    ];

    public function mount($id){
            $this->topic = app()->get("data")[$id];
    }

    public function render()
    {
        return view('livewire.topic');
    }

    public function commentAdded(){
        $this->topic["comments"] = $this->comments;
    }

    public function submit(){
        /// call api
        // append array
        if($this->validate())
        {
            error_log("submitted");
            array_unshift($this->topic["comments"],
                [
                    "id" => app()->get("getNextId")(),
                    "body"=>$this->body,
                    "author" => "Steve",
                    "comments" => []
                ]
            );
            $this->body = "";
        }
    }
}
