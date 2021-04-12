<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pedidohasproducto(){
        return $this->belongsTo(pedidohasproducto::class);
    }

    public function formaspago(){
        return $this->belongsTo(formaspago::class);
    }
}
