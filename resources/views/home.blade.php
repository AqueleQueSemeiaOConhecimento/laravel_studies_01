@extends('layouts.main_layout')
@section('content')

{{-- Apresentar myName a partir da route::view --}}
@if(!empty($myName))
    <p>{{ $myName }}</p>
@endif
@endsection