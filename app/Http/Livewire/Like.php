<?php

namespace App\Http\Livewire;

use App\Models\Regional;
use App\Models\RegionalLike;
use Livewire\Component;

class Like extends Component
{
    public Regional $regional;

    public RegionalLike $regionalLike;

    public $word;
    public $check;
    public $like;

    public function mount($word){
        $this->word = $word->id;
        $this->check = RegionalLike::where(['regional_id'=>$this->word, 'user_id'=>auth()->user()->id])->first();
        if($this->check===null){
            $this->like = null;
        }elseif($this->check->is_liked === 1){
            $this->like = true;
        }else{
            $this->like = false;
        }

    }

    public function like(){

        if($this->check===null){
            RegionalLike::create([
                'regional_id' => $this->word,
                'user_id'=>auth()->user()->id,
                'is_liked'=>true,
            ]);
            $this->like = true;
        }elseif($this->check->is_liked === 1){
            $this->check->update(['is_liked'=> 0]);
            $this->like = false;
        }else{
            $this->check->update(['is_liked'=> 1]);
            $this->like = true;
        }

    }

    public function render()
    {
        return view('livewire.like');
    }
}
