<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $primaryKey = 'nro';
    protected $fillable = [
         'fecha',
         'monto',
         'tipo',
         'ciPersonal',
         'estadoPreparacion',
         'estadoPago',
         'idMetodoPago'
    ];

    public function personal(): BelongsTo
    {
        return $this->belongsTo(Personal::class, 'ciPersonal');
    }

    public function metodoPago(): BelongsTo
    {
        return $this->belongsTo(MetodoPago::class, 'idMetodoPago');
    }

    public function productos(): BelongsToMany
    {
        return $this->belogsToMany(Producto::class, 'detalle_pedido_productos', 'nroPedido', 'idProducto');
                    ->withPivot('cantidad');
    }

    public function factura() :HasOne
    {
        return $this->hasOne(Factura::class, 'nroPedido');
    }

    public function local(): HasOne
    {
        return $this->hasOne(Local::class, 'nroPedido');
    }

    public function aDomicilio(): HasOne
    {
        return $this->hasOne(Adomicilio::class, 'nroPedido');
    }

    public function clientesFrecuentes(): BelongsToMany
    {
        return $this->belongsToMany(ClienteConCodigo::class, 'lista_de_frecuencias', 'nroPedido', 'codigoCliente');
    }
}
