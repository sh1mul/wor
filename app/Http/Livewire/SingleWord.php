<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Regional;

class SingleWord extends Component
{
    public $word;

    public $division_word;


    public function mount($word){
      $this->word = Regional::where('word', $word)->firstOrFail();
    }

    public function render(Regional $regional)
    {

        $divisionword = $regional->where('division_id', $this->word->division_id)->take(20)->inRandomOrder()->get();
        $this->division_word = $divisionword->except([$this->word->id]);

        $others = Regional::where('standard_id', $this->word->standard_id)->get();

        return view('livewire.single-word',['division_word'=>$this->division_word, 'others'=>$others]);
    }
}
