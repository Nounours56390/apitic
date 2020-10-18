<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    protected $guarded = [];
    protected $with = ["specialisation", "classe","race","armure"];
    use HasFactory;

    public function specialisation()
    {
        return $this->belongsTo('App\Models\Specialisation');
    }

    public function classe()
    {
        return $this->belongsTo('App\Models\Classe');
    }
    public function race()
    {
        return $this->belongsTo('App\Models\Race');
    }
    public function armure()
    {
        return $this->belongsTo('App\Models\Armure');
    }
}
