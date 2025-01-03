@extends('news')

@section('content')
    <h1>{{ $news->title }}</h1>
    <p>{{ $news->content }}</p>
    @if ($news->image)
        <img src="{{ asset('storage/' . $news->image) }}" alt="Haber Görseli">
    @endif
    <a href="{{ route('news.index') }}">Geri</a>
@endsection
