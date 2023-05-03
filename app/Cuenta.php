<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Cuenta Mercado Libre
class Cuenta extends Model
{
    //
    protected $fillable = [
        'client_id',
        'client_secret',
        'code',
        'name',
        'access_token',
        'authorization_code',             
        'user_id',                
    ];	

    public function user(){
        return $this->belongsTo(user::class);
    }

}
