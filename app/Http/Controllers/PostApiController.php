<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;


class PostApiController extends Controller
{
    //
    public function index(){
        $posts=Post::all();
        return response()->json(['message'=>'Sucesss','data'=>$posts]);
    }

    public function show($id){
        $post=Post::find($id);
        return response()->json(['message'=>'Success','data'=>$post]);
    }
    public function store(Request $request){
        $post=Post::create($request->all());
        return response()->json(['message'=>'Data has been inserted successfully','data'=>$post]);
    }
    public function update(Request $request,$id){
        $post=Post::find($id);
        $post->update($request->all());
        return response()->json(['message'=>'Success','data'=>$post]);
    }
    public function destroy($id){
        $post=Post::find($id);
        $post->delete();
        return response()->json(['message'=>'Delete Success Update','data'=>null]);
    }
}
