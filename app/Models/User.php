<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    // si no se agregan aqui los campos, sale error no se puede insertar
    // valores por defecto, por ejemplo en el controlador
    protected $fillable = [
        'img',
        'banner',
        'username',
        'email',
        'password',
        'token',
        'role_id',
        'country_id',
        'statu_id',
        'is_buyer',
        'theme_color',
        'rank_id',
        'membership_start',
        'membership_end',
        'terms',
        'is_verified',
        // 'is_ignored',
        'is_banned',
        'reason_id',
        'url_profile',
        'url_patreon',
        'ip_adress'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
