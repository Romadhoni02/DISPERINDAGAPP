@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Berita Terbaru</h1>
    @foreach($news as $item)
        <div class="news-item">
            <h3>{{ $item->title }}</h3>
            <img src="{{ asset($item->image) }}" alt="{{ $item->title }}">
            <p>{{ $item->content }}</p>
        </div>
    @endforeach
</div>
@endsection
