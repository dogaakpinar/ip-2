@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Futbolcular</h1>
        <div class="row">
            @foreach($players as $player)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $player['image'] }}" class="card-img-top" alt="{{ $player['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $player['name'] }}</h5>
                            <p class="card-text">
                                <strong>Takım:</strong> {{ $player['team'] }}<br>
                                <strong>Pozisyon:</strong> {{ $player['position'] }}<br>
                                <strong>Doğum Tarihi:</strong> {{ date('d.m.Y', strtotime($player['dob'])) }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

