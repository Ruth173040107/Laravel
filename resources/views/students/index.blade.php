@extends('layout.main')
@section('tittle', 'web programing About')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Daftar Mahasiswa</h1>

                <ul class="list-group">
                   @foreach( $students as $student) 
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $student->nama }}
                    <a href="" class="badge badge-info">detail</a>
                    @endforeach
                    </li>
                </ul>

            </div>
        </div>
    </div>
@endsection