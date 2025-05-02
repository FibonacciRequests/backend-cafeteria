<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $primaryKey = 'nroPedido';
    public $incrementing = false;

    protected $fillable = ['nroPedido', 'nroMesa'];

    public function pedido(): BelongsTo
    {
        return $this->belongsTo(Pedido::class, 'nroPedido');
    }
}
