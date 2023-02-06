@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('admin.update', $laundry->id ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="bis" class="form-label">bis</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$laundry->nama}}">
                            @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nomerhp" class="form-label">nomerhp</label>
                            <input type="text" class="form-control" id="nomerhp" name="nomerhp" placeholder="Nama nomerhp">
                            @error('nomerhp')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
</div>
@endsection