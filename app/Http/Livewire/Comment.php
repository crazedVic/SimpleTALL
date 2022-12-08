<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comment extends Component
{
    public $comment; 
    public $index;
    public $body;

    protected $listeners = ['commentAdded' => '$refresh'];
    //protected $listeners = ['commentAdded'];

    public $rules =[
        "body" => "required|string|min:4"
    ];

    public function commentAdded(){
        $this->comment["body"] = $this->comment["body"]. ".";
    }

    public function render()
    {
        return view('livewire.comment');
    }

    public function submit(){
        /// call api
        // append array
        if($this->validate())
        {
            array_push($this->comment["comments"],
                [
                    "id"=> app()->get("getNextId")(),
                    "body"=>$this->body,
                    "author" => "Steve",
                    "comments" => []
                ]
            );

            $this->body = "";
        }
    }
}
