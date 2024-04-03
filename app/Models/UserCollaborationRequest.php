<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCollaborationRequest extends Model
{
    use HasFactory;

    protected $fillable = ['collaboration_proposal_id', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function collaborationProposal()
    {
        return $this->belongsTo(CollaborationProposal::class, 'collaboration_proposal_id');
    }
}
