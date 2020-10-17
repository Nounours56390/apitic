@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('personnage.create') }}" title="Ajouter un personnage"> +</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

        @foreach ($personnages as $personnage)
            <p>{{$personnage->pseudo}}</p>
            <p>{{$personnage->classe}}</p>
            <p>{{$personnage->race}}</p>
            <p>{{$personnage->specialisation}}</p>
            <p>{{$personnage->armure}}</p>
            <p>{{$personnage->proprietaire}}</p>
        @endforeach

@endsection
