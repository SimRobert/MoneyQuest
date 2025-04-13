<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decision extends Model
{
    use HasFactory;

    // Dacă folosești fillable sau vrei să protejezi câmpuri
    protected $guarded = []; // <- permite atribuirea în masă pentru toate câmpurile

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scenario(){
        return $this->belongsTo(Scenario::class);
    }

    public function option(){
        return $this->belongsTo(Option::class);
    }
}
