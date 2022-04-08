<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;

class Edit extends Component
{
    public $postId;
    public $title;
    public $content;
    public $image_url;

    public function mount($id){
        $post=Post::find($id);
        if($post){
            $this->postId=$post->id;
            $this->title=$post->title;
            $this->content=$post->content;
            $this->image_url=$post->image_url;
        }
    }

    public function update(){
        $post=Post::find($this->postId);
        if($post){
            $post->update([
                'title'=>$this->title,
                'content'=>$this->content,
                'image_url'=>$this->image_url
            ]);
            session()->flash('success','Data berhasil diupdate');
            return redirect()->route('post.index');  
        }
    }

    public function render()
    {
        return view('livewire.post.edit');
    }
}
