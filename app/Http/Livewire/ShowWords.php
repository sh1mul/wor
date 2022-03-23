<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Regional;

class ShowWords extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.show-words',[
            'words'=>Regional::inRandomOrder()->paginate(20),
        ]);
    }
}
