<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $fillable = [
        'id_admin', 'username', 'password','name','role'
    ];
=======
    protected $table='users';
    // protected $fillable = [
    //     'name','username', 'password','email','role'
    // ];
>>>>>>> ad0c98e9e59c27ef755d4b1587a92ab5c42f807f

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Apakah user memiliki role
     *
     * @return boolean
     */
    public function hasRole($roleName)
    {
        return $this->role === $roleName;
    }
}
