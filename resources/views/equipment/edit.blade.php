@extends('main')

@section('content')
    @livewire('equipment.form', ['equip_id' => $equip_id])
@endsection
