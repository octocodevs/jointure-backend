<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

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

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->collabTypes = ['Co-Branding', 'Co-Licensing', 'Co-Supply', 'Co-Stand', 'Co-Marketing', 'Co-Event'];
        $this->categories = [
            'Co-Branding' => ['Experiencia', 'Personalidad', 'Oportunidad'],
            'Co-Licensing' => ['Imagen', 'Producto', 'Contenido', 'Operaciones', 'Tecnología'],
            'Co-Supply' => ['Muestra', 'Descuento', 'Cashback'], 
            'Co-Stand' => ['Comerciales', 'Profesionales'], 
            'Co-Marketing' => ['Contenido', 'Promoción', 'Patrocinio', 'Testimonio'], 
            'Co-Event' => ['Comerciales', 'Profesionales']
        ];
    }
    
    
   

    public static function getRules($collabTypes, $categories){
        $rules=[
    'title'=> 'required|string|max:255',
    'description' => 'required|string|min:50|max:255',
    'collab_start_date'=> 'nullable|date',
    'collab_end_date'=> 'nullable|date|after_or_equal:collab_start_date',
    'collab_type' => ['required', 'string', Rule::in($collabTypes)],
    'category'=> ['nullable', 'string', Rule::in($categories)],
    'duration'=> 'nullable|string|max:255',
    'compensation' => 'nullable|string|max:255',
    'compensation_amount' => 'nullable|numeric|min:0',
    'cost' =>'nullable|string|max:255',
    'objectives'=>'required|string',
    'ideal_collaborators'=>'required|string',
    'proposal'=>'required|string',
    'responsibility'=>'required|string',
    'planning'=>'required|string',
    'operations_and_sales'=>'required|string',
    'marketing'=>'required|string',
    'economic_agreements'=>'required|string',
    'terms_and_conditions'=>'required|string',
    'observations'=>'required|string',
    'public_or_private'=> 'required|string|in:public,private',
    'collab_limit'=>'nullable|boolean',
    'limit'=>'nullable, numeric',
    'ad_start_date'=> 'required|date',
    'ad_end_date'=> 'required|date',
    'send_notification'=>'required|boolean'];
    return $rules;
        }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    
}

