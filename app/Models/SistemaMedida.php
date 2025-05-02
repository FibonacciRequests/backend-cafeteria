<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SistemaMedida extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = 'false';
    protected $keytype = 'string';

    protected $fillable = ['id','nombre'];

    public function insumos(): HasMany
    {
        return $this->hasMany(ProductoInsumo::class, 'sistema_medida_id');

    }

    public function productoInsumos(): HasMany
    {
        return $this->hasMany(ProductoInsumo::class, 'idSistemaMedida');
    }

    public function compraInsumos(): HasMany
    {
        return $this->hasMany(CompraInsumo::class, 'idSistemaMedida');
    }

}
