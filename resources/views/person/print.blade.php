@extends('layouts.main')

@section('content')
    <div class="card my-2">
        <div class="card-header">
            Data Person
        </div>

        <div class="card-body">
            <p>Nama Anda {{ $person->name }}</p>
            <p>email Anda {{ $person->email }}</p>
        </div>
    </div>
@endsection
