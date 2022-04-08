<?php

namespace App\Http\Livewire\Post;

use App\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    // public $posts;
    public $search;

    use WithPagination;

    protected $queryString = [
        'search',
    ];

    public function destroy($id){
        $post=Post::find($id);
        if($post){
            $post->delete();
        }
        session()->flash('success','Data berhasil dihapus');
        return redirect()->route('post.index');  
    }

    public function render()
    {
        // $this->posts=Post::latest()->paginate(5);
        return view('livewire.post.index',[
            // 'posts'=>Post::latest()->paginate(5)
            'posts'=>$this->search===null ? Post::latest()->paginate(4):Post::where('title','like','%'.$this->search.'%')->latest()->paginate(4)
        ]);
    }
}
