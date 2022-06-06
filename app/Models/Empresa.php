<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $primaryKey = 'id';
    protected $keyType = 'integer';

    protected $fillable = [
        'nombre',
        'rubro',

    ];

    public function User(){
        return $this->hasMany('App\Models\User');
    }
}
