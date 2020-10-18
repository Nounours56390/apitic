@extends('layouts.app')

@section('content')
  

            <div class="pull-left">
                <h2>Ajoute un nouveau personnage</h2>
            </div>
            
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('personnage.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pseudo:</strong>
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Proprietaire:</strong>
                    <input type="text" name="proprietaire" class="form-control" placeholder="Proprietaire">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <select name="armure_id" class="form-control" >
                        <option value="0"> Choisissez votre armure</option>
                        @foreach ($armures as $armure)
                            <option value={{$armure->id}}>{{$armure->armure}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <select name="race_id" class="form-control" >
                        <option value="0"> Choisissez votre race</option>
                        @foreach ($races as $race)
                        <option value={{$race->id}}>{{$race->race}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <select onchange="changeSelect(this)" name="classe_id" class="form-control">
                        <option value="0"> Choisissez votre classe</option>
                        @foreach ($classes as $classe)
                        <option id='classe' value={{$classe->id}}>{{$classe->classe}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group " id= "divspecialisation">
                <select name="specialisation_id" class="form-control invisible" id="specialisation">
                </select>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </div>
    </form>

    <script>
        function changeSelect(selected){
            var specialisations=<?PHP echo json_encode($specialisations);?>;
            console.log(specialisations);
          var speSelect = document.getElementById("specialisation");
          var i =0 ;
            if(selected.value == 0)
                speSelect.className = "form-control invisible";
            else
                speSelect.className = "form-control";

          while (speSelect.firstChild) {
            speSelect.removeChild(speSelect.firstChild);
            }

           for(var specialisation of specialisations)
           {
                if(specialisations[i].classe_id == selected.value)
                {
                    var opt = document.createElement("option");
                        opt.value = specialisations[i].id;
                        opt.innerHTML = specialisations[i].specialisation;
                    speSelect.appendChild(opt);
                }
                i++;
           }


        }
    </script>
          
@endsection