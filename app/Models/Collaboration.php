<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaboration extends Model
{
    use HasFactory;

    //HAY QUA AÑADIR EL USER ID COMO FOREIGN KEY
    protected $fillable = [
        'title',
        'description',
        'collab_start_date',
        'collab_end_date',
        'collab_type',
        'category',
        'duration',
        'compensation',
        'compensation_amount',
        'cost',
        'objectives',
        'ideal_collaborators',
        'proposal',
        'responsibility',
        'planning',
        'operations_and_sales',
        'marketing',
        'economic_agreements',
        'terms_and_conditions',
        'observations',
        'collab_limit',
        'limit',
        'ad_start_date',
        'ad_end_date',
        'send_notification',
    ];
    protected $casts = [
        'compensation_amount' => 'decimal:2', 
        'send_notification' => 'boolean', 
    ];

    protected $dates = [
        'collab_start_date',
        'collab_end_date',
        'ad_start_date',
        'ad_end_date',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    
}

