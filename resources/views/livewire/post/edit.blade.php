<div style="margin-top:80px">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <form wire:submit.prevent="update" >
              
                 <input type="hidden" wire:model="postId">
                <div class="form-group">
                    <label>Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" wire:model="title" placeholder="Masukkan Title">
                    @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" rows="4" wire:model="content" placeholder="Masukkan content">{{$content}}</textarea>
                    @error('content') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                  <label>Image URL</label>
                  <input class="form-control @error('image_url') is-invalid @enderror" type="text" wire:model="image_url" placeholder="Masukkan Title">
                  @error('image_url') <div class="alert alert-danger">{{ $message }}</div> @enderror
              </div>
                <button type="submit" class="btn btn-success btn-md mt-2">Update</button>
             </form>
          </div>
       </div>
    </div>
 </div>
 