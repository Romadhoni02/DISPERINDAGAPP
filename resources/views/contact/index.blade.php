@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Kontak</h1>
    @foreach($contacts as $contact)
        <div class="contact-item">
            <h3>{{ $contact->name }}</h3>
            <p>Email: {{ $contact->email }}</p>
            <p>Telepon: {{ $contact->phone }}</p>
            <p>Pesan: {{ $contact->message }}</p>
        </div>
    @endforeach
</div>
@endsection
