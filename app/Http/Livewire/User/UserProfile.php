<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Regional;
use Livewire\WithPagination;

class UserProfile extends Component
{
    use WithPagination;

    public $user;

    //public $regionals;

    public function mount($username){
        $this->user = User::where('username', $username)->firstOrFail();
        //$this->regionals = Regional::inRandomOrder()->paginate(20);
        //'words'=>Regional::inRandomOrder()->paginate(20)
    }

    public function render()
    {
        //$this->regionals = Regional::where('user_id',$this->user->id)->orderBy('created_at', 'desc')->paginate(10);
        return view('livewire.user.user-profile',['regionals'=>  Regional::where('user_id', $this->user->id)->inRandomOrder()->paginate(10)]);
    }
}
