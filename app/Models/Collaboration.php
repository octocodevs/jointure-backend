<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;

class Collaboration extends Model
{
    use HasFactory;

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
    'description' => 'required|string|max:255',
    'collab_start_date'=> 'nullable|date',
    'collab_end_date'=> 'nullable|date|after_or_equal:collab_start_date',
    'collab_type' => ['required', 'string', Rule::in($collabTypes)],
    'category'=> ['nullable', 'string', Rule::in($categories)],
    'duration'=> 'nullable|string|max:255',
    'compensation' => 'nullable|string|max:255',
    'compensation_amount' => 'nullable|numeric|min:0',
    'cost' =>'nullable|string|max:255',
    'objectives'=>'required|string',
    'ideal_collaborators'=>'nullable|string',
    'proposal'=>'required|string',
    'responsibility'=>'nullable|string',
    'planning'=>'nullable|string',
    'operations_and_sales'=>'nullable|string',
    'marketing'=>'nullable|string',
    'economic_agreements'=>'nullable|string',
    'terms_and_conditions'=>'nullable|string',
    'observations'=>'nullable|string',
    'public_or_private'=> 'required|string|in:public,private',
    'collab_limit'=>'nullable|boolean',
    'limit'=>'nullable, numeric',
    'ad_start_date'=> 'required|date',
    'ad_end_date'=> 'required|date',
    'send_notification'=>'nullable|boolean'];
    return $rules;
        }

        public static function getMessages()
        {
            return [
                'title.required' => 'Por favor, introduzca un título',
                'title.max' => 'El título no puede tener más de 255 caracteres.',
                'description.required' => 'El campo de descripción es obligatorio.',
                'description.min' => 'La descripción debe tener al menos 50 caracteres.',
                'description.max' => 'La descripción no puede tener más de 255 caracteres.',
                'collab_start_date.date' => 'La fecha de inicio de la colaboración debe ser una fecha válida.',
                'collab_end_date.date' => 'La fecha de finalización de la colaboración debe ser una fecha válida.',
                'collab_end_date.after_or_equal' => 'La fecha de finalización de la colaboración debe ser una fecha ulterior a la fecha de inicio.',
                'collab_type.required' => 'El tipo de colaboración es obligatorio.',
                'compensation_amount.numeric' => 'La compensación debe ser un valor numérico.',
                'objectives.required' => 'Los objetivos son requeridos.',
                'proposal.required' => 'La propuesta es requerida.',
                'public_or_private.required' => 'El campo de público o privado es requerido.',
               'limit.numeric' => 'El límite de colaboradores debe ser un valor numérico.',
              'ad_start_date.required' => 'La fecha de inicio del anuncio es requerida.',
            'ad_start_date.date' => 'La fecha de inicio del anuncio debe ser una fecha válida.',
            'ad_end_date.required' => 'La fecha de finalización del anuncio es requerida.',
            'ad_end_date.date' => 'La fecha de finalización del anuncio debe ser una fecha válida.',
    
            ];}

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    
}

