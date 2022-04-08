<div style="margin-top:80px">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <form wire:submit.prevent="store" action="/posts" method="POST">
               @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" wire:model="title" placeholder="Masukkan Title">
                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" rows="4" wire:model="content" placeholder="Masukkan content">{{$content}}</textarea>
                    @error('content') <div class="alert alert-danger">{{ $message }}</div> @enderror
                    <button type="submit" class="btn btn-success btn-md mt-2">SIMPAN</button>
                  </div>
              
             </form>
          </div>
       </div>
    </div>
 </div>
 