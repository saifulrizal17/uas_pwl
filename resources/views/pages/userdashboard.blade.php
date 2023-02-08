@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="mb-3">
                <a href="{{ route('admin.create') }}"><button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0z"/>
                  </svg></button></a>
            </div> --}}
            <form action="{{ route('index') }}" method="get">
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
                        <th scope="col">Status</th>
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
                                <td>{{ $data->total_harga}}</td>
                                <th>@if($data->status == 1) Selesai @else Proses @endif</th>
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
