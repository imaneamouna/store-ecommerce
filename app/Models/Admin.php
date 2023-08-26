<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'admins';
    //protected $fillable = ['name', 'description', 'image', 'main_price', 'discount_id', 'category_id', 'main_discount', 'color', 'size', 'quantity'];
   protected $guarded = [];//it means all columns in admins table nothing hiidden
   public $timestamps = true ;// use created and other time stamps



}
