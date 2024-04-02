<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollaborationParticipation extends Model
{
    use HasFactory;
    
    
    public function collaborationProposal()
    {
        return $this->belongsTo(CollaborationProposal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
