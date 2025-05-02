<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $fillable = ['codigo', 'ci', 'nit', 'correoElectronico', 'nroPedido'];

    public function pedido(): BelongsTo
    {
        return $this->belongsTo(Pedido::class, 'nroPedido');
    }
}
