<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = ['nombre', 'especificacion'];

    public function productos(): BelongsToMany
    {
        return $this->belongsToMany(Producto::class, 'categoria_productos', 'idCategoria', 'idProducto');
    }
}
