<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoInsumo extends Model
{
    protected $table = 'producto_insumos';
    protected $primaryKey = ['idProdcuto', 'idInsumo'];
    public $incrementing = false;

    protected $fillable = ['idProducto', 'idInsumo', 'cantidadRequerida', 'idSistemaMedida'];

    public function producto()
    {
     return $this->belogsTo(Producto::class, 'idProducto');
    }

    public function insumo()
    {
        return $this->belongsTo(Insumo::class, 'idInsumo');
    }

    public function sistemaMedida()
    {
        return $this->belongsTo(SistemaMedida::class, 'idSistemaMedida');
    }

}
