<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $primaryKey = 'ci';
    public $incrementing = false;
    protected $keyType = 'integer';

    protected $fillable = ['ci', 'nombre', 'telefono', 'correo', 'password'];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Rol::class, 'rol_personals', 'ciPersonal', 'codigoRol');
    }

    public function pedidos(): HasMany
    {
        return $this->hasMany(Pedido::class, 'ciPersonal');
    }

    public function bitacoras(): HasMany
    {
        return $this->hasMany(Bitacora::class, 'ciPersonal');
    }
}
