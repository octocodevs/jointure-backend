<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    protected $fillable = [

        'name',
        'email',
        'password',
        'position',
        'profile_type',
        'country',
        'business_name',
        'subscription_type',
        'google_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    protected $appends = [
        'profile_photo_url',
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

    protected static function boot(){
        parent::boot();
        static::creating(function ($user) {
            $user->subscription_type = 'basic'  ;
        });
    }
    public function profile(){
        return $this->hasOne(Profile::class);
    }

    public function collaborationProposals(){
        return $this->hasMany(CollaborationProposal::class);
    }

    public function collaborationParticipations()
    {
        return $this->hasMany(CollaborationParticipation::class);
    }

    //mensajeria
    public function sentMessages()
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function receivedMessages()
    {
        return $this->hasMany(Message::class, 'receiver_id');
    }
}
