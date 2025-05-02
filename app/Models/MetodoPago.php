<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetodoPago extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'nombre'];

    public function pedidos(): HasMany
    {
        return $this->hasMany(Pedido::class, 'idMetodoPago');
    }
}
