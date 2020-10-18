@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                @endif
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="d-flex">
        <div class="nav justify-content-center mb-3 mt-1" >
            <a class="btn btn-primary btn-lg rigth" href="/organisation/classe_id"> Classe</a>
        </div>
        <div class="nav justify-content-center mb-3 mt-1" >
            <a class="btn btn-primary btn-lg rigth" href="/organisation/specialisation_id">Specialisation</a>
        </div>
    </div>


    <div class="nav justify-content-center mb-3 mt-1" >
        <a class="btn btn-primary btn-lg rigth" href="{{ route('personnage.create') }}" title="Ajouter un personnage"> Ajouter</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Pseudo</th>
            <th scope="col">Race</th>
            <th scope="col -9">Point de vie</th>
            <th scope="col">Armure</th>
            <th scope="col">Detail</th>
            <th scope="col">Proprietaire</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($personnages as $personnage)
            <tr>
                <td style="background-color: #FFFFFF">
                    <script>
                            var personnage=<?PHP echo json_encode($personnage);?>;
                            var lettres = personnage.pseudo;
                            var couleurs = ["bleu","green","red", "darkred", "orange", "gold"];
                            if(personnage.proprietaire == "Tom")
                                for(c=0;c<lettres.length;c++) 
                                    document.write(getCharColor(lettres[c]));
                            else
                                document.write(lettres);

                            function getCharColor(lettre)
                            {
                                return lettre.fontcolor(couleurs[getRandomInt(6)]);
                            } 

                            function getRandomInt(max){
                                return Math.floor(Math.random() * Math.floor(max));
                            }

                    </script>
                </td>
            <td style="background-color: {{$personnage->classetype->color}}">{{$personnage->race->race}}</td>
                <td style="background-color: {{$personnage->classetype->color}}">{{$personnage->classetype->pv()}}</td>
                <td  style="background-color: {{$personnage->classetype->color}}">{{$personnage->armure->armure}}</td>
            <td  style="background-color: {{$personnage->classetype->color}}">
            <img src="{{asset('images/'.$personnage->classetype->getClasseName().'/'.$personnage->specialisation->specialisation.'.png')}}" alt="" class="mb-3" >
            <p>Je suis un {{$personnage->classetype->getClasseName()}} et mon {{$personnage->classetype->getTypeSort()}} préféré est {{$personnage->classetype->getCoupFav()}}</p>
                 
        </td>
            <td style= "background-color: {{$personnage->classetype->color}}">{{$personnage->proprietaire}}</td>
            <td style="background-color: #FFFFFF">
                <div >
                    <a href={{route('personnage.edit',$personnage->id)}}>
 
                        <button type="button" class="justify-content-center btn btn-primary btn-lg btn-block mb-2">Modifier</button>
                    </a>
                    <form action="{{route('personnage.destroy',$personnage->id)}}" method="POST">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" class="justify-content-center btn btn-primary btn-lg btn-block"
                            onclick="return confirm('Voulez vous vraiment supprimer ce personnage?');">Supprimer</button>
                    </form>
                </div>
            </td>
              </tr>

        @endforeach
        </tbody>
      </table>
@endsection
