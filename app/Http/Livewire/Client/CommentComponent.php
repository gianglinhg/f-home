<?php

namespace App\Http\Livewire\Client;

use Livewire\Component;
use App\Models\Product;
use App\Models\Comment;

class CommentComponent extends Component
{
    public $product;
    public $comment;

    public function storeComment(){
        if(auth()->check()){
            Comment::create([
                'product_id' => session()->get('product_id'),
                'user_id' => auth()->id() ?? 1,
                'message' => $this->comment
            ]);
            $this->comment = "";
        }
        $this->emit('msg', 'Hello');
    }
    public function render()
    {
        $comments = Comment::where('product_id',session()->get('product_id'))->get();
        return view('livewire.client.comment-component',compact('comments'));
    }
}
