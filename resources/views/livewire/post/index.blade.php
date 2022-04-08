
<div style="margin-top:80px">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            @if(session()->has('success'))
               <div class="alert alert-success">
                  {{session('success')}}
               </div>
            @endif
            <a href="{{route('post.create')}}" class="btn btn-success btn-md">TAMBAH</a>
            <input class="form-control mt-4 mb-2" type="text" wire:model="search" placeholder="Masukkan kata kunci">
            <table class="table table-bordered mt-3">
               <thead>
                 <tr>
                   <th scope="col">Pokemon</th>
                   <th scope="col">Deskripsi</th>
                   <th scope="col">Link Gambar</th>
                   <th scope="col">OPTIONS</th>
                 </tr>
               </thead>
               <tbody>
                  @foreach ($posts as $post)
                 <tr>
                   <td>{{$post->title}}</td>
                   <td>{{$post->content}}</td>
                   <td>{{$post->image_url}}</td>
                    <td>
                       <div class="text-center">
                          
                              <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary btn-sm">EDIT</a>
                           <form style="display:inline-block" action="/posts/{{$post->id}}" method="POST">
                              @method('DELETE')
                              @csrf
                           <button wire:click="destroy({{$post->id}})"  class="mt-2 btn btn-danger btn-sm">HAPUS</button> 
                     
                        </form> 
                       </div>
                    </td>
                 </tr>
                 @endforeach
               </tbody>
             </table>
             {{$posts->links()}}
         </div>
      </div>
   </div>
</div>
