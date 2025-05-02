<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RolPersonal extends Model
{
    protected $table = 'rol_personals';
    protected $primaryKey = ['codigoRol', 'ciPersonal'];
    public $incrementing = false;

    protected $fillable = ['codigoRol', 'ciPersonal'];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'codigoRol');

    }

    public function personal()
    {
        return $this->belongsTo(Personal::class, 'ciPersonal');
    }
}
