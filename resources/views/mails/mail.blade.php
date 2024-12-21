@extends('layouts.emails.email')
@section('content')
    <h1>ABMohsin</h1>
    <p>Name: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Message: {{ $content }}</p>
@endsection
