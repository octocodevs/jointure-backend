<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationParticipation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'collaboration_id',
        'status'
    ];

    public static $rulesStatus = [
        'status' => 'required|string|in:pending,accepted, rejected',
    ];

    public function collaborationProposal()
    {
        return $this->belongsTo(CollaborationProposal::class,'collaboration_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($proposal) {
            $proposal->status = 'pending';
            // $proposal->collab_limit = false;

        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
