<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $primarykey='id';

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono',
    ];

    protected $guardar=[];

    public function Pedido()
    {
        return $this->hasMany(Pedido::class);
    }
}
