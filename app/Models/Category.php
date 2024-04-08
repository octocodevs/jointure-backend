<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public static $categories = [
        'Co-Branding' => 'string|in:Experiencia, Personalidad,Oportunidad',
        'Co-Licensing' => 'string|in:Imagen,Producto,Contenido,Operaciones,Tecnología',
        'Co-Supply' => 'string|in:Muestra,Descuento,Cashback',
        'Co-Stand' => 'string|in:Comerciales,Profesionales',
        'Co-Marketing' => 'string|in:Contenido,Promoción,Patrocinio,Testimonio',
        'Co-Event' => 'string|in:Comerciales,Profesionales'
    ];

    public static function isValidCategory($category, $subcategory)
    {
        return array_key_exists($category, self::$categories) && in_array($subcategory, self::$categories[$category]);
    }

    public static function getValidCategories()
    {
        return collect(self::$categories)->keys()->toArray();
    }

    public function collaborationProposals()
    {
        return $this->hasMany(CollaborationProposal::class);
    }
}

