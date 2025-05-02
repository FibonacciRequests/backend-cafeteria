<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClienteConCodigo extends Model
{
    protected $primaryKey = 'codigo';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['codigo', 'nombre', 'nro_whatsapp'];

    public function pedidos(): BelongsToMany
    {
        return $this->belongsToMany(Pedido::class, 'lista_de_frecuencias', 'codigoCliente', 'nroPedido');
    }
}
