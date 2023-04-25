<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maincategories extends Model
{
    use HasFactory;

    use HasFactory;
    use Notifiable;
    protected $table = 'main_categories';
    protected $fillable = [
        'translation_lang',
        'translation_of',
        'name',
        'slug',
        'active',
        'created_at',
        'updated_at',
    ];

    public function scopeActive($query){

        return $query->where('active',1);

    }
}
