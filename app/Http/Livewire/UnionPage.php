<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Division;
use App\Models\Regional;
use App\Models\District;
use App\Models\Upazila;
use App\Models\Union;
use Livewire\WithPagination;

class UnionPage extends Component
{
    use WithPagination;
    public $div;
    public $dis;
    public $subdis;
    public $union;

    //public $regionals;

    public function mount($div, $dis, $subdis, $union){
        $this->div = Division::where('slug', $div)->firstOrFail();
        $this->dis = District::where('slug', $dis)->firstOrFail();
        $this->subdis = Upazila::where('slug', $subdis)->firstOrFail();
        $this->subdis = Union::where('slug', $union)->firstOrFail();

        //$this->regionals = Regional::where('division_id', $this->div->id)->get();
    }
    public function render()
    {
        return view('livewire.upazila-page',['regionals'=>Regional::where('upazila_id',$this->subdis->id)->inRandomOrder()->paginate(10)]);
    }
}
