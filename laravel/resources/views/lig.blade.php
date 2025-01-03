@extends('layout')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Türkiye Futbol Ligleri</h1>

        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Süper Lig</h2>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Takım</th>
                                <th>O</th>
                                <th>G</th>
                                <th>B</th>
                                <th>M</th>
                                <th>P</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                            <tr>
                                <td>{{$team->id}}</td>
                                <td>{{$team->name}}</td>
                                <td>30</td>
                                <td>22</td>
                                <td>4</td>
                                <td>4</td>
                                <td>70</td>
                            </tr>
@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>




    </div>
@endsection

