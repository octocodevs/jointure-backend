<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class CollaborationProposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'brand',
        'image',
        // 'category_id',
        'title',
        'description',
        'collab_start_date',
        'collab_end_date',
        'collab_type',
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
        'public_or_private',
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

    public static $rulesCollaboration=  [
        'user_id' => 'required|exists:users,id',
        'brand'=> 'required|string|max:100',
        // 'category_id' => 'required|exists:categories,id',
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:500',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'collab_start_date' => 'nullable|date',
        'collab_end_date' => 'nullable|date|after_or_equal:collab_start_date',
        // 'collab_type' => ['required', 'string', Rule::in([])],
        'collab_type' => 'required|string|in:Co-Branding,Co-Licensing,Co-Supply,Co-Stand,Co-Marketing,Co-Event',
        'duration' => 'nullable|string|in:puntual,periódica,largo plazo',
        'compensation' => 'nullable|string|max:255',
        'compensation_amount' => 'nullable|numeric|min:0',
        'cost' => 'nullable|string|max:255',
        'objectives' => 'required|string|max:500',
        'ideal_collaborators' => 'nullable|string|max:500',
        'proposal' => 'required|string',
        'responsibility' => 'nullable|string',
        'planning' => 'nullable|string',
        'operations_and_sales' => 'nullable|string',
        'marketing' => 'nullable|string',
        'economic_agreements' => 'nullable|string',
        'terms_and_conditions' => 'nullable|string',
        'observations' => 'nullable|string',
        'public_or_private' => 'nullable|string|in:publico,privado',
        'collab_limit' => 'nullable|boolean',
        'limit' => 'nullable|numeric',
        'ad_start_date' => 'required|date',
        'ad_end_date' => 'required|date',
        'send_notification' => 'nullable|boolean',
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($proposal) {
            $proposal->public_or_private = 'privado';
            $proposal->collab_limit = false;

        });
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
