<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListaDeFrecuencia extends Model
{
    protected $table = 'lista_de_frecuencia';
    protected $primaryKey = ['codigoCliente', 'nroPedido'];
    public $incrementing = false;

    protected $fillable = ['codigoCliente', 'nroPedido'];

    public function cliente()
    {
        return $this->belongsTo(ClienteConCodigo::class, 'codigoCliente');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'nroPedido');
    }
}
