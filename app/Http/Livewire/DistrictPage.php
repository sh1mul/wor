<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Division;
use App\Models\Regional;
use App\Models\District;
use Livewire\WithPagination;

class DistrictPage extends Component
{
    use WithPagination;
    public $div;
    public $dis;


    //public $regionals;

    public function mount($div, $dis){
        $this->div = Division::where('slug',$div)->firstOrFail();
        $this->dis = District::where(['slug'=> $dis, 'division_id'=>$this->div->id])->firstOrFail();
        //$this->regionals = Regional::where('division_id', $this->div->id)->get();
    }
    public function render()
    {
        return view('livewire.district-page',['regionals'=>Regional::where('district_id',$this->dis->id)->inRandomOrder()->paginate(10)]);
    }
}
