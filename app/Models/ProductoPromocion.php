<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductoPromocion extends Model
{
    protected $table = 'producto_promocions';
    protected $primaryKey = ['IdProdcuto', 'IdPromocion'];
    public $incrementing = false;

    protected $fillable = ['IdProducto', 'IdPromocion', 'descuento', 'parametro'];


    public function producto()
    {
        return $this->belongsTo(Producto::class, 'IdProducto');

    }

    public function promocion()
    {
        return $this->belongsTo(Promocion::class, 'IdPromocion');
    }
}
