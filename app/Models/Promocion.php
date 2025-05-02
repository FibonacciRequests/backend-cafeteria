<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $fillable = ['nombre','fecha_inicio','fecha_fin'];

    public function productos(): BelongsToMany
    {
        return $this->belongsToMany(Producto::class, 'producto_promocions', 'IdPromocion', 'IdProducto')
                    ->withPivot('descuento', 'parametro');
    }
}
