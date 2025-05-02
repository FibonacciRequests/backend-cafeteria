<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Rol extends Model
{
   protected $primaryKey = 'codigo';
   public $incrementing = true;
   protected $keyType = 'integer';
   
   protected $fillable = ['nombre', 'manual'];


   public function personales(): BelongsToMany
   {
    return $this->belongsToMany(Personal::class, 'rol_personals', 'codigoRol', 'ciPersonal');
    
   }
}
