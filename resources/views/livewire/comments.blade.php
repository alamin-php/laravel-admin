<div>
    <!-- form start -->
    <form wire:submit.prevent="addComment">
            <div class="text-center mt-3">
        @if (session()->has('message'))

            <p class="text-success">{{ session('message') }}</p>
        @endif
    </div>
    <div class="card-body">
        <div class="form-group">
        <label for="inputName">Comments</label>
        <textarea class="form-control" wire:model.lazy="details" id="details" placeholder="Enter your comments here" required="" cols="30" rows="10"></textarea>
        {{-- <input type="text" class="form-control" wire:model="details" id="details" placeholder="Enter your comments here" required=""> --}}
        </div>
        @error('details') <span class="error text-danger">{{ $message }}</span> @enderror        

        <div class="form-group">
        @error('image') <span class="error text-danger">{{ $message }}</span> @enderror
        <br>
        <label for="inputName">Comments</label>
        <input type="file" wire:model="image" id="image" name="image" />
        {{-- <input type="text" class="form-control" wire:model="details" id="details" placeholder="Enter your comments here" required=""> --}}
        <div wire:loading wire:target="image" class="text-success">Uploading...</div>
        </div>
            @if ($image)
                <img src="{{ $image->temporaryUrl() }}" width="100" height="80">
                @else
            @endif
                {{-- <p wire:loading class="text-success">Image Loading. . .</p> --}}
    </div>

    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-save"></i> Save Information</button>
    </div>
    </form>
</div>
