<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $guarded = [];

    public function materia()
    {
    	return $this->belongsTo(Materia::class);
    }

    public function juzgado()
    {
    	return $this->belongsTo(Juzgado::class);
    }

    public function proceso()
    {
    	return $this->belongsTo(Proceso::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
