<div>
    <!-- form start -->
    <form wire:submit.prevent="addComment">
    <div class="card-body">
        <div class="form-group">
        <label for="inputName">Comments</label>
        <textarea class="form-control" wire:model="details" id="details" placeholder="Enter your comments here" required="" cols="30" rows="10"></textarea>
        {{-- <input type="text" class="form-control" wire:model="details" id="details" placeholder="Enter your comments here" required=""> --}}
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-save"></i> Save Information</button>
    </div>
    </form>
</div>
