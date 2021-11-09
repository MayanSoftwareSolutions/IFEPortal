<div>
<form method="POST" action="{{ route('import') }}" enctype="multipart/form-data">
  
    <div>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
  
    <div class="form-group">
        @csrf
        <label for="exampleInputName">File:</label>
        <input type="file" wire:model="file" class="form-control" name="file" >
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
  
    <button type="submit" wire:click="submit" class="btn btn-success">Save</button>
</form>

</div>