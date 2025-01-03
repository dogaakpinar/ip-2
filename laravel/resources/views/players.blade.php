@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Sporcular</h1>
        <div class="row">
            @foreach($players as $player)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">

                            <h5 class="card-title">{{ $player['name'] }}</h5>
                            <p class="card-text">{{ $player['position'] }}</p>
                        <strong>Doğum Tarihi:</strong> {{ date('d.m.Y', strtotime($player['dob'])) }}

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
