@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Transferler</h1>
        <div class="row">
            @php
                $transfers = [
                    ['player' => 'Ahmet Çelik', 'from' => 'Galatasaray', 'to' => 'Fenerbahçe', 'date' => '2024-01-15'],
                    ['player' => 'Zeynep Yıldız', 'from' => 'Beşiktaş', 'to' => 'Trabzonspor', 'date' => '2024-02-01'],
                    ['player' => 'Mustafa Kara', 'from' => 'Başakşehir', 'to' => 'Galatasaray', 'date' => '2024-02-28'],
                    // Add more transfers as needed
                ];
            @endphp

            @foreach($transfers as $transfer)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $transfer['player'] }}</h5>
                            <p class="card-text">
                                <i class="fas fa-arrow-right"></i>
                                {{ $transfer['from'] }} <span class="text-primary">→</span> {{ $transfer['to'] }}
                            </p>
                            <p class="card-text"><small class="text-muted">Transfer Tarihi: {{ $transfer['date'] }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
