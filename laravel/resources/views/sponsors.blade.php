@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Takım Sponsorları</h1>
        <div class="row">
            @php
                $teamSponsors = [
                    [
                        'team' => 'Galatasaray',
                        'sponsors' => ['NEF (Ana Sponsor)', 'Nike (Forma Sponsoru)', 'Türk Telekom (Stadyum Sponsoru)']
                    ],
                    [
                        'team' => 'Fenerbahçe',
                        'sponsors' => ['Avis (Ana Sponsor)', 'Puma (Forma Sponsoru)', 'Ülker (Stadyum Sponsoru)']
                    ],
                    [
                        'team' => 'Beşiktaş',
                        'sponsors' => ['Beko (Ana Sponsor)', 'Adidas (Forma Sponsoru)', 'Vodafone (Stadyum Sponsoru)']
                    ],
                    // Add more teams and sponsors as needed
                ];
            @endphp

            @foreach($teamSponsors as $teamSponsor)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="mb-0">{{ $teamSponsor['team'] }}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($teamSponsor['sponsors'] as $sponsor)
                                <li class="list-group-item">
                                    <i class="fas fa-handshake me-2"></i>{{ $sponsor }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
