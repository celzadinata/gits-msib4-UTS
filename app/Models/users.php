<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'avatar',
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'jenis_kelamin',
        'alamat',
        'no_hp',
        'role'
    ];

    protected $hidden = [
        'password'

    ];

    public function products()
    {
        return $this->hasMany(products::class);
    }
    public function transaction()
    {
        return $this->hasMany(transactions::class);
    }
}
