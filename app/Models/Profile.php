<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $primaryKey = 'user_id';
    protected $fillable = [
        'image',
        'CIF',
        'legal_structure',
        'phone_number',
        'email_contact',
        'sector',
        'activity',
        'offer',
        'values',
        'business_size',
        'market',
        'clients',
        'sales_channels',
        'description',
        'social_networks_instagram',
        'social_networks_linkedin',
        'social_networks_x',
        'social_networks_facebook',
        'social_networks_tiktok',
        'social_networks_spotify',
        'social_networks_youtube',
        'social_networks_pinterest',
    ];

    public static $rules = [
        'image'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'CIF' => 'required|string|max:24',
        'legal_structure' => 'required|in: Autónomo,Comunidad de bienes,Sociedad Limitada (S. L.),Sociedad Limitada Laboral (S. L. L.),Sociedad Anónima (S. A.),Sociedad Anónima Laboral (SAL),Sociedad Limitada Nueva Empresa (S. L. N. E.)',
        'phone_number' => 'nullable|string|max:150',
        'email_contact' => 'nullable|string|max:150',
        'sector' => 'required|string|in:Alimentación y bebidas,Viajes,Familia,
            Entretenimiento,
            Belleza,
            Educación,
            Salud,
            Tecnología,
            Música,
            Hogar,
            Horeca,
            Mascotas,
            Deportes,
            Arte y cultura,
            Motor,
            Moda,
            Sin ánimo de lucro,
            Retail,
            Juguetes,
            Mobiliario,
            Servicios profesionales,
            Otros',
        'activity' => 'nullable|string|max:255',
        'offer' => 'nullable|string|max:255',
        'values' => 'nullable|string|max:255',
        'business_size' => 'required|in: micro empresa, pequeña empresa, mediana empresa, gran empresa',
        'market' => 'nullable|in:Local,Comarcal,Provincial,Autonómico,Nacional,Internacional',
        'clients' => 'required|in:B2B,B2C,B2B y B2C',
        'sales_channel' => 'required|in:online,offline,ambos',
        'description' => 'nullable|string|max:500',
        'social_networks_instagram'=> 'nullable|string|max:255',
        'social_networks_linkedin'=> 'nullable|string|max:255',
        'social_networks_x'=> 'nullable|string|max:255',
        'social_networks_facebook'=> 'nullable|string|max:255',
        'social_networks_tiktok'=> 'nullable|string|max:255',
        'social_networks_spotify'=> 'nullable|string|max:255',
        'social_networks_youtube'=> 'nullable|string|max:255',
        'social_networks_pinterest'=> 'nullable|string|max:255',
    ];


    // Relationships ------------------------------------------

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
