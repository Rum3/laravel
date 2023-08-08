@extends('auth.layouts')

@section('content')

@if(auth()->check())
    <p>Име: {{ auth()->user()->name }}</p>
    <p>Email: {{ auth()->user()->email }}</p>
@else
    <p>Трябва да сте логнати, за да видите тази информация.</p>
@endif
    
@endsection