<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
   protected $fillable = ['fecha'];

   public function insumos(): BelongsToMany
   {
    return $this->belongsToMany(Insumo::class, 'compra_insumos', 'idCompra', 'idInsumo')
                ->withPivot('precio', 'idSistemaMedida');
   }
}
