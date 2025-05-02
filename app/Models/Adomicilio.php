<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adomicilio extends Model
{
    protected $primaryKey = 'nroPedido';
    public $incrementing = false;

    protected $fillable = ['nroPedido', 'ubicacion', 'telefono', 'personaRecibe'];

    public function pedido(): BelongsTo
    {
        return $this->belongsTo(Pedido::class, 'nroPedido');
    }
}
