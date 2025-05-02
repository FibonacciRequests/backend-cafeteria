<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $fillable = ['nombre', 'stock', 'sistema_medida_id'];

    public function sistemaMedida(): BelongsTo
    {
        return $this->belongsTo(SistemaMedida::class, 'sistema_medida_id');

    }

    public function productos(): BelongToMany
    {
        return $this->belongsToMany(Producto::class, 'producto_insumos', 'idInsumo', 'idProducto')
                    ->withPivot('cantidadRequerida', 'idSistemaMedida');
    }

    public function compras(): BelongsToMany
    {
        return $this->belongsToMany(Compra::class, 'compra_insumos', 'idInsumo', 'idCompra')
                    ->withPivot('precio', 'idSistemaMedida');
    }
}
