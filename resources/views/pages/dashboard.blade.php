@extends('layouts.app')

@section('content')
<div class="row">
                    @foreach ($datas as $data)
                        <div class="col-md-4">
                            <div class="card my-2">
                                <img src="{{ $data->img }}" class="card-img-top" style="height: 200px" alt="...">
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="card-title">{{ $data->nama }}</h5>
                                        <p class="card-text">
                                           {{$data->nomerhp}}
                                        </p>
                                    </div>
                                    <a href="/show/{{$data->id}}" class="block w-50 btn btn-primary">Lihat Lengkap</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
@endsection
