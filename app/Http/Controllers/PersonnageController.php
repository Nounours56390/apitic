<?php

namespace App\Http\Controllers;

use App\Models\Specialisation;
use App\Models\Race;
use App\Models\Classe;
use App\Models\Personnage;
use App\Models\Armure;
use Illuminate\Http\Request;

class PersonnageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type = null)
    {
        $users = Personnage::all();
        if($type)
            {
                $users = Personnage::orderBy($type)->get();
            }       
        
        foreach($users as $user)
        {
            $patch = "App\\Classes\\".$user->classe->classe;
            $user->classetype = new $patch($user->specialisation->specialisation);
        }
        
       

        return view("personnage/index", ['personnages' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $races = Race::all();
        $classes = Classe::all();
        $specialisations = Specialisation::all();
        $armures = Armure::all();
        return view("personnage/create", ['races'=>$races, 'classes'=>$classes, 'specialisations'=>$specialisations, 'armures'=>$armures]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'pseudo' => 'required',
            'race_id' => 'required',
            'classe_id' => 'required',
            'specialisation_id' => 'required',
            'armure_id' => 'required',
            'proprietaire' => 'required',
        ]);
            Personnage::create($request->all());
            return redirect()->route('personnage.index')->with('message', 'Personnage crée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function show(Personnage $personnage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function edit(Personnage $personnage)
    {
        $races = Race::all();
        $classes = Classe::all();
        $specialisations = Specialisation::all();
        $armures = Armure::all();
        return view("personnage/edit", ['races'=>$races, 'classes'=>$classes, 'specialisations'=>$specialisations, 'armures'=>$armures, 'values'=>$personnage]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personnage $personnage)
    {
        $request->validate([
            'pseudo' => 'required',
            'race_id' => 'required',
            'classe_id' => 'required',
            'specialisation_id' => 'required',
            'armure_id' => 'required',
            'proprietaire' => 'required',
        ]);
        $personnage->update($request->all());
        return redirect()->route('personnage.index')->with('message', 'Personnage bien modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personnage  $personnage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personnage $personnage)
    {
        $personnage->delete();
        return redirect()->route('personnage.index')->with('message', 'Personnage suprimer');
    }
}
