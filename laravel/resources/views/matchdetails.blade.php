@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Maç Detayları</h1>
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Galatasaray 2 - 1 Fenerbahçe</h2>
                <p class="text-center">15 Nisan 2024, 20:00 - Türk Telekom Stadyumu</p>
            </div>
            <div class="card-body">
                <h3>Goller</h3>
                <ul class="list-group mb-4">
                    <li class="list-group-item">
                        <i class="fas fa-futbol me-2"></i> 23' Mauro Icardi (Galatasaray)
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-futbol me-2"></i> 56' Arda Güler (Fenerbahçe)
                    </li>
                    <li class="list-group-item">
                        <i class="fas fa-futbol me-2"></i> 78' Kerem Aktürkoğlu (Galatasaray)
                    </li>
                </ul>

                <h3>Maç İstatistikleri</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>İstatistik</th>
                        <th>Galatasaray</th>
                        <th>Fenerbahçe</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Toplam Şut</td>
                        <td>15</td>
                        <td>12</td>
                    </tr>
                    <tr>
                        <td>Korner</td>
                        <td>7</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Ofsayt</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Faul</td>
                        <td>14</td>
                        <td>16</td>
                    </tr>
                    <tr>
                        <td>Sarı Kart</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

