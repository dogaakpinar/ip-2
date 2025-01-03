@extends('layout')

@section('content')
    <div class="container my-5">
        <div class="row g-4">


            <div class="row">
                @foreach($news as $new)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://image.cnnturk.com/i/cnnturk/75/0x555//55c5d8ec5659341748c6b508.jpg" class="card-img-top" alt="Futbol">
                            <div class="card-body">
                                <h5 class="card-title">{{ $new->title }}</h5>
                                <p class="card-text">{{$new->content}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card">
                            <img src="https://image.fanatik.com.tr/i/fanatik/75/0x410/6777c0fbaa166e292ec24aee.jpg" class="card-img-top" alt="Etkinlikler">
                            <div class="card-body">
                                <h5 class="card-title">{{$new->title}}</h5>
                                <p class="card-text">{{$new->content}}</p>

                            </div>
                        </div>
                    </div>

                @endforeach
            </div>





    </div>

@endsection
