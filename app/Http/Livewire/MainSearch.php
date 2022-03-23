<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Regional;
class MainSearch extends Component
{

    public $term = "";

    public function render()
    {

        $words = Regional::search(ltrim($this->term))->take(5)->get();

        $data = [
            'words' => $words,
        ];

        return view('livewire.main-search', $data);
    }
}
