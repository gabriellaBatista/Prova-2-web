<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moeda extends Model
{
    use HasFactory;
    public $fillable = [
        'pais',
        'nomedamoeda',
        'valor',
        'ano',
        'user_id',

    ];
    public function moeda (){
        return $this->hasMany(Moeda::class,'user_id');
    }
}
