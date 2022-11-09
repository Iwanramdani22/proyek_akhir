@extends('layouts.main')

@section('content')
    {{-- menampilkan error inputan --}}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                {{-- Menampilkan Pesan --}}
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card my-3">
        <div class="card-header">
            Form Tambah Data
        </div>
        <div class="card-body">
            <form action="{{ route('person.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" placeholder="Masukkan Nama Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="nama@mail.com" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" value="simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection
