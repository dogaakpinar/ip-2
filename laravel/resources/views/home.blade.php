@extends('layout')

@section('content')
    <div class="hero">
        <div class="container">
            <h1 class="display-4 fw-bold">Doğa Spor</h1>
            <p class="lead">Şanlı Balıkesirspor</p>

        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2 class="mb-4">Son Haberler</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        @foreach($news as $singleNews)
                            <div class="card">
                                <img src="https://image.fanatik.com.tr/i/fanatik/75/0x410/6777c0fbaa166e292ec24aee.jpg" class="card-img-top" alt="Haber Görseli">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $singleNews->title }}</h5>
                                    <p class="card-text">{{ $singleNews->description }}</p>
                                    <a href="/news" class="btn btn-custom">Devamını Oku</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="https://trthaberstatic.cdn.wp.trt.com.tr/resimler/1848000/balikesirspor-1849485.jpg" class="card-img-top" alt="Haber Görseli">
                            <div class="card-body">
                                <h5 class="card-title">Milli Takım Kadrosu Açıklandı</h5>
                                <p class="card-text">EURO 2024 hazırlıkları kapsamında milli takım kadrosu belli oldu. İşte sürpriz isimler...</p>
                                <a href="/news" class="btn btn-custom">Devamını Oku</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2 class="mb-4">Puan Durumu</h2>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Süper Lig</h5>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Takım</th>
                                <th>P</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Balıkesirspor</td>
                                <td>29</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Galatasaray</td>
                                <td>28</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Beşiktaş</td>
                                <td>22</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="/lig2" class="btn btn-custom btn-sm">Tüm Puan Durumu</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2 class="mb-4">Yaklaşan Maçlar</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Galatasaray vs Fenerbahçe</h5>
                        <p class="card-text">
                            <i class="far fa-calendar-alt me-2"></i> 15 Nisan 2024, 20:00
                            <br>
                            <i class="fas fa-map-marker-alt me-2"></i> Türk Telekom Stadyumu
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Beşiktaş vs Trabzonspor</h5>
                        <p class="card-text">
                            <i class="far fa-calendar-alt me-2"></i> 16 Nisan 2024, 19:00
                            <br>
                            <i class="fas fa-map-marker-alt me-2"></i> Vodafone Park
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Başakşehir vs Konyaspor</h5>
                        <p class="card-text">
                            <i class="far fa-calendar-alt me-2"></i> 17 Nisan 2024, 20:30
                            <br>
                            <i class="fas fa-map-marker-alt me-2"></i> Başakşehir Fatih Terim Stadyumu
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

