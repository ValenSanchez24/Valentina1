<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{

    protected $table = 'pedidos';
    
    protected $primarykey='id';

    protected $fillable = [
        'cliente_id',
        'platillo',
        'descripcion',
        'mesero',
    ];

    protected $guardar=[];

    public function Cliente()
    {
        return $this->hasOne(Cliente::class, 'id', 'cliente_id');
    }


}
