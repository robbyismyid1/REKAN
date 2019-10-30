<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    protected $fillable = [
        'name',
    ];
    public $timestamps = true;
    public function user()
	{
		return $this->hasMany('App\User', 'role_id');
	}
}
