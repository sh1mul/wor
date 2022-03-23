<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Comment;


class PostComment extends Component
{
    //public WComment $wcomment;

    public $word;

    public $comment;

    protected $rules = [
        'comment'=>'required|min:10|max:200',
    ];

    protected $messages = [
        'comment.required'=>'আপনি কিছু লিখেননি',
        'comment.min'=>'কমপক্ষে ১০ টি বর্ণ',
        'comment.max'=>'সর্বোচ্চ ২০০ টি বর্ণ',
    ];

    protected $validationAttributes = [
        'comment'=>'মন্তব্য',
    ];


    public function mount($word){
        $this->word = $word;
    }
    public function comment(){
        $this->validate();

        Comment::create([
            'regional_id'=>$this->word->id,
            'user_id'=>auth()->user()->id,
            'comment'=>$this->comment,
        ]);
        $this->reset();
        session()->flash('message', 'আপনার মন্তব্যটি যুক্ত করা হয়েছে');
    }
    public function render()
    {
        return view('livewire.post-comment');
    }
}
