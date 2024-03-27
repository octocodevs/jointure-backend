<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [

        'name',
        'email',
        'password',
        'position',
        'profile_type',
        'country',
        'business_name',
        'subscription_type',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password'=>'required|string|confirmed|min:8',
        'position'=>'required|string|max:255',
        'profile_type' => 'required|in:agencia,freelance,empresa',
        'country' => 'nullable|string|max:255',
        'business_name'=>'required|string|max:255',
        'subscription_type' => 'nullable|in:basic,professional,business',
    ];

    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function collaborations(){
        return $this->hasMany(Collaboration::class);
    }
}
