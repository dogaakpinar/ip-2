@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Maç Görevlileri</h1>
        <div class="row">
            @php
                $officials = [
                    ['name' => 'Ahmet Yılmaz', 'role' => 'Hakem', 'image' => 'https://via.placeholder.com/150x150.png?text=AY', 'team' => 'A Klasman'],
                    ['name' => 'Mehmet Kaya', 'role' => 'Yardımcı Hakem', 'image' => 'https://via.placeholder.com/150x150.png?text=MK', 'team' => 'B Klasman'],
                    ['name' => 'Ayşe Demir', 'role' => 'Dördüncü Hakem', 'image' => 'https://via.placeholder.com/150x150.png?text=AD', 'team' => 'C Klasman'],
                    // Add more officials as needed
                ];
            @endphp

            @foreach($officials as $official)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ $official['image'] }}" class="card-img-top" alt="{{ $official['name'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $official['name'] }}</h5>
                            <p class="card-text">{{ $official['role'] }}</p>
                            <p class="card-text"><small class="text-muted">{{ $official['team'] }}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

