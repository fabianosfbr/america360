<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use WendellAdriel\Lift\Lift;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Lift;

    #[Fillable]
    public $name;

    #[Fillable]
    public $email;


    #[Fillable]
    #[Hidden]
    #[Cast('hashed')]
    public $password;


    #[Cast('datetime')]
    public $email_verified_at;

    #[Hidden]
    public $remember_token;
}
