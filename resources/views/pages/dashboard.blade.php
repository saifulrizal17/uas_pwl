@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-3">
                <a href="{{ route('admin.create') }}"><button type="submit" class="btn btn-primary">Tambah Data</button></a>
            </div>
            <form action="{{ route('admin.index') }}" method="get">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Nama..." name="nama" id="nama">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
            <div class="card">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">nama</th>
                        <th scope="col">alamat</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">berat</th>
                        <th scope="col">Jenis Paket</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $key => $data)
                            <tr>
                                <th>{{ $key+1 }}</th>
                                <th>{{ $data->nama }}</th>
                                <th>{{ $data->alamat }}</th>
                                <td>{{ $data->nomerhp }}</td>
                                <th>{{ $data->berat }}</th>
                                <td>@if($data->jenis_paket  === 8000)
                                    Paket A
                                    @elseif($data->jenis_paket  === 5000)
                                    Paket B
                                    @else
                                    Paket C
                                    @endif
                                    {{-- {{ $data->jenis_paket }} --}}
                                </td>
                                <td>{{ $data->jenis_paket * $data->berat}}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.edit', $data->id) }}">
                                        <div class="btn-group btn-group-sm">
                                            <button class="btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="orange" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </a>
                                    <form action="{{ route('admin.destroy',$data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="btn-group btn-group-sm">
                                            <button type="submit" class="btn">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </form> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $datas->links('pagination::bootstrap-5')}}
            </div>
        </div>
    </div>
</div>
@endsection
