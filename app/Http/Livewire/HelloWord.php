<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWord extends Component

{
    public $word = "";

    public function helloword(){
        $this->word = "I love you kobita";
    }
    public function render()
    {
        return view('livewire.hello-word');
    }
}
