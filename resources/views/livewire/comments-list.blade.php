<div>
    @if (count($allComments))
    @foreach ($allComments as $comment)
    <div class="card card-default">
        <div class="card-header">
            <strong class="float-right text-danger" wire:click="remove({{$comment->id}})" style="cursor: pointer"><i class="fas fa-window-close"></i></strong>
          <h3 class="card-title"><i class="fas fa-comments"></i> Al Amin <small class="text-muted">{{ $comment->created_at->diffForHumans()}}</small></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
                
        <p>{{ $comment->details  }}</p>
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
