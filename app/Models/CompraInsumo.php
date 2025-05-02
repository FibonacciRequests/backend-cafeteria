<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompraInsumo extends Model
{
    protected $table = 'compra_insumos';
    protected $primarKey = ['idCompra', 'idInsumo'];
    public $incrementing = false;


    protected $fillable = ['idCompra', 'idInsumo', 'precio', 'idSistemaMedida'];

    public function compra()
    {
        return $this->belongsTo(Compra::class, 'idCompra');

    }

    public function insumo()
    {
        return $this->belongsTo(Insumo::class, 'idInsumo');

    }

    public function sistemaMedida()
    {
        return $this->belongsTo(SistemaMedida::class, 'idSistemaMedida');
    }
}
