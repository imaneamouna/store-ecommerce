<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class language extends Model
{
    use HasFactory;
    // use Notifiable;
    protected $table = 'languages';
    protected $fillable = [
        'abbr',
        'name',
        'direction',
        'active',
        'created_at',
        'updated_at',

    ];
}
