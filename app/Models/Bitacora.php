<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bitacora extends Model
{
    protected $fillable = ['fecha_hora', 'accion', 'ip_origen', 'ciPersonal'];

    public function personal(): BelongsTo
    {
        return $this->belongsTo(Personal::class, 'ciPersonal');
    }
}
