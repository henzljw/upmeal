<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Recomended;

class RecommendedMeals extends Component
{
    public $recommends;
    public $posts;
    public $recposts;


    public function render()
    {


        $this->posts = Post::OrderBy('created_at', 'desc')->get();
        $this->recommends = Recomended::where('user_id',auth()->user()->id)->first();
        if(!is_null($this->recommends)){

            $this->recposts = Post::where('cuisine_id',$this->recommends->cuisine_id)->get();
        }else{
            $this->recposts = null;
        }
        return view('livewire.recommended-meals');
    }
}
