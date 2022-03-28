<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Division;
use App\Models\Regional;
use Livewire\WithPagination;

class DivisionPage extends Component
{
    use WithPagination;
    public $div;

    //public $regionals;

    public function mount($div){
        $this->div = Division::where('slug', $div)->firstOrFail();
        //$this->regionals = Regional::where('division_id', $this->div->id)->get();
    }
    public function render()
    {
        return view('livewire.division-page',['regionals'=>Regional::where('division_id',$this->div->id)->inRandomOrder()->paginate(10)]);
    }
}
