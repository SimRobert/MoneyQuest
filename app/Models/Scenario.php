<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scenario extends Model
{
    use HasFactory;

    // Dacă folosești fillable sau vrei să protejezi câmpuri
    protected $guarded = []; // <- permite atribuirea în masă pentru toate câmpurile

    public function options(){
        return $this->hasMany(Option::class);
    }

    public function decisions(){
        return $this->hasMany(Decision::class);
    }
}