<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLists extends Model
{
    protected $fillable = [
        'name', 'supplyList',
    ];

    public function lists(){
        return $this->hasOne('App\User');
    }
}
