<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    //Speciifchiamo la tabella per aiutare laravel a trovare la tabella la plurale
    protected $table = 'users_info';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
