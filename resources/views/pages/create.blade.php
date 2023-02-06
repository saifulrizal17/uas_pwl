@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('admin.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama nama">
                            @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                        </div>
                    </div>
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
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
