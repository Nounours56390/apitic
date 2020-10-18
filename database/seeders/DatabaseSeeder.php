<?php

use Illuminate\Database\Seeder;
use App\Models\Race;
use App\Models\Classe;
use App\Models\Personnage;
use App\Models\Specialisation;
use App\Models\Armure;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Armure::create([
            'armure' => 'Tissu'
        ]);
        Armure::create([
            'armure' => 'Cuir'
        ]);
        Armure::create([
            'armure' => 'Meta'
        ]);

        Race::create([
            'race' => 'Humain'
        ]);
        Race::create([
            'race' => 'Elfe'
        ]);
        Race::create([
            'race' => 'Orc'
        ]);
        Race::create([
            'race' => 'Nain'
        ]);

        
        Classe::create([
            'classe' => 'Guerrier'
        ]);
        Classe::create([
            'classe' => 'Mage'
        ]);
        Classe::create([
            'classe' => 'Pretre'
        ]);
        Classe::create([
            'classe' => 'Chasseur'
        ]);

        Specialisation::create([
            'classe_id' => '1',
            'specialisation' =>'Arme'
        ]);
        Specialisation::create([
            'classe_id' => '1',
            'specialisation' =>'Fureur'
        ]);
        Specialisation::create([
            'classe_id' => '1',
            'specialisation' =>'Protection'
        ]);

        Specialisation::create([
            'classe_id' => '2',
            'specialisation' =>'Givre'
        ]);
        Specialisation::create([
            'classe_id' => '2',
            'specialisation' =>'Feu'
        ]);
        Specialisation::create([
            'classe_id' => '2',
            'specialisation' =>'Arcane'
        ]);

        Specialisation::create([
            'classe_id' => '3',
            'specialisation' =>'Sacre'
        ]);
        Specialisation::create([
            'classe_id' => '3',
            'specialisation' =>'Discipline'
        ]);
        Specialisation::create([
            'classe_id' => '3',
            'specialisation' =>'Ombre'
        ]);
        Specialisation::create([
            'classe_id' => '4',
            'specialisation' =>'Precision'
        ]);
        Specialisation::create([
            'classe_id' => '4',
            'specialisation' =>'Maitrise des betes'
        ]);
        Specialisation::create([
            'classe_id' => '4',
            'specialisation' =>'Survie'
        ]);



        Personnage::create([
            'pseudo' => 'Luck',
            'race_id' =>'1',
            'classe_id' =>'1',
            'specialisation_id' =>'1',
            'armure_id' =>'1',
            'proprietaire' =>'Tom',
        ]);
        Personnage::create([
            'pseudo' => 'King',
            'race_id' =>'4',
            'classe_id' =>'3',
            'specialisation_id' =>'7',
            'armure_id' =>'1',
            'proprietaire' =>'Panda',
        ]);
        Personnage::create([
            'pseudo' => 'Jery',
            'race_id' =>'2',
            'classe_id' =>'2',
            'specialisation_id' =>'5',
            'armure_id' =>'2',
            'proprietaire' =>'Martin',
        ]);
        Personnage::create([
            'pseudo' => 'Jojo',
            'race_id' =>'3',
            'classe_id' =>'3',
            'specialisation_id' =>'8',
            'armure_id' =>'1',
            'proprietaire' =>'Tom',
        ]);
        Personnage::create([
            'pseudo' => 'Swidou',
            'race_id' =>'4',
            'classe_id' =>'4',
            'specialisation_id' =>'11',
            'armure_id' =>'1',
            'proprietaire' =>'Tom',
        ]);
        Personnage::create([
            'pseudo' => 'Luck',
            'race_id' =>'1',
            'classe_id' =>'1',
            'specialisation_id' =>'3',
            'armure_id' =>'1',
            'proprietaire' =>'Luc',
        ]);


    }
}
