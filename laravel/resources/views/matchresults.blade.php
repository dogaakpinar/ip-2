@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Maç Sonuçları</h1>
        <div class="row">
            @php
                $matchResults = [
                    ['homeTeam' => 'Galatasaray', 'awayTeam' => 'Fenerbahçe', 'homeScore' => 2, 'awayScore' => 1, 'date' => '15 Nisan 2024'],
                    ['homeTeam' => 'Beşiktaş', 'awayTeam' => 'Trabzonspor', 'homeScore' => 3, 'awayScore' => 3, 'date' => '14 Nisan 2024'],
                    ['homeTeam' => 'Başakşehir', 'awayTeam' => 'Konyaspor', 'homeScore' => 1, 'awayScore' => 0, 'date' => '14 Nisan 2024'],
                    // Add more match results as needed
                ];
            @endphp

            @foreach($matchResults as $match)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $match['homeTeam'] }} vs {{ $match['awayTeam'] }}</h5>
                            <p class="card-text text-center">
                                <span class="h3">{{ $match['homeScore'] }} - {{ $match['awayScore'] }}</span>
                            </p>
                            <p class="card-text text-center"><small class="text-muted">{{ $match['date'] }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

