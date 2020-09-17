<div>
                <div class="text-center m-3">
        @if (session()->has('message'))

            <a class="alert alert-danger text-white">{{ session('message') }}</a>
        @endif
    </div>
            <div wire:loading class="text-center m-3">
        <h3 class="text-success">Loading. . .</h3>
    </div>
    <input type="text" class="form-control mb-5" wire:model.debounce.500ms="searchTerm" placeholder="Search your comments here" />
    @if (count($allComments))
    @foreach ($allComments as $comment)
    <div class="card card-default">
        <div class="card-header">
            <strong class="float-right text-danger" wire:click="remove({{$comment->id}})" style="cursor: pointer"><i class="fas fa-window-close"></i></strong>
          <h3 class="card-title"><img src="{{ asset($comment->user->image) }}" alt="" class="rounded-circle" width="64" height="64"> {{ $comment->user->name }} <small class="text-muted">{{ $comment->created_at->diffForHumans()}}</small></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
                
        <p>{{ $comment->details  }}</p>
        <img src="{{ Storage::url($comment->image) }}" alt="" width="80" height="80">
        </div>
        <!-- /.card-body -->
    </div>
    @endforeach
    @else
    <div class="card card-default">
        <!-- /.card-header -->
        <div class="card-body">
                
        <h5>No Comments</h5>
        </div>
        <!-- /.card-body -->
    </div>
        
    @endif



</div>
