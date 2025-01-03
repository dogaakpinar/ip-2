@extends('layout')

@section('content')
    <h1>Yeni Haber Ekleme kismi</h1>
    <form action="">
        @csrf
        <div>
            <label for="title">Başlık</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="content">İçerik</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <div>
            <label for="image">Görsel</label>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit">Kaydet</button>
    </form>
@endsection
