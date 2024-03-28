<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'CIF',
        'legal_structure',
        'sector',
        'activity',
        'offer',
        'values',
        'business_size',
        'market',
        'clients',
        'sales_channels',
        'description',
    ];

    public static $rules= [
            'image'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'CIF' => 'required|string|max:24',
            'legal_structure' => 'required|in: Autónomo,Comunidad de bienes,Sociedad Limitada (S. L.),Sociedad Limitada Laboral (S. L. L.),Sociedad Anónima (S. A.),Sociedad Anónima Laboral (SAL),Sociedad Limitada Nueva Empresa (S. L. N. E.)',
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
            'offer' =>'nullable|string|max:255',
            'values'=>'nullable|string|max:255',
            'business_size'=>'required|in: micro empresa, pequeña empresa, mediana empresa, gran empresa',
            'market' => 'nullable|in:Local,Comarcal,Provincial,Autonómico,Nacional,Internacional',
            'clients' => 'required|in:B2B,B2C,B2B y B2C',
            'sales_channel'=> 'required|in:online,offline',
            'description' => 'nullable|string|max:500',
    ];


    // Relationships ------------------------------------------

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
