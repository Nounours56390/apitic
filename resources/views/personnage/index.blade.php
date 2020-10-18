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
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Pseudo</th>
            <th scope="col">Race</th>
            <th scope="col">Classe</th>
            <th scope="col">Specialisation</th>
            <th scope="col">Armure</th>
            <th scope="col">Proprietaire</th>
            <th scope="col">Detail</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($personnages as $personnage)
            <tr>
                <td>{{$personnage->pseudo}}</td>
            <td style="background-color: {{$personnage->classetype->color}}">{{$personnage->race->race}}</td>
                <td style="background-color: {{$personnage->classetype->color}}">{{$personnage->classe->classe}}</td>
                <td  style="background-color: {{$personnage->classetype->color}}">{{$personnage->specialisation->specialisation}}</td>
                <td  style="background-color: {{$personnage->classetype->color}}">{{$personnage->armure->armure}}</td>
                <td  style="background-color: {{$personnage->classetype->color}}">{{$personnage->proprietaire}}</td>
            <td  style="background-color: {{$personnage->classetype->color}}"> Je suis un {{$personnage->classetype->getClasseName()}} et mon {{$personnage->classetype->getTypeSort()}} préféré est {{$personnage->classetype->getCoupFav()}}</td>
            <td>  {{$personnage->classetype->cologgr()}}</td>
            <td>
                <div>
                    <button>Modifier</button>
                    <button >Supprimer</button>
                </div>
            </td>
              </tr>
        @endforeach
        </tbody>
      </table>


@endsection
