<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePedidoProducto extends Model
{
    protected $table = 'detalle_pedido_productos';
    protected $primaryKey = ['idProducto', 'nroPedido'];
    public $incrementing = false;

    protected $fillable = ['idProducto', 'nroPedido', 'cantidad'];

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'idProdcuto');

    }

    public function producto()
    {
        return $this->belongsTo(Producto::class, 'idProducto');
    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'nroPedido');
    }
}
