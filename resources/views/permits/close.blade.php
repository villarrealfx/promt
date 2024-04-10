@extends('main')

@section('content')
    @livewire('permits.form', ['permit_id' => $permit_id])
@endsection
