<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function rol(){
        return $this->belongsTo(rol::class);
    }

    
    public function pedido(){
        return $this->hasMany(pedido::class);
    }


/*  Agregar trending a producto ************
 agregar productos reales y desactivar los mocks
 configurar vista individual
 adaptar el template a la realidad
 crear tabla imagen y relacionar con producto ************
 configurar login ***
 y proteger la vista de checkout
  */



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
