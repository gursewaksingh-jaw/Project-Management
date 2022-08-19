<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public $fillable= [
        'p_menu',
        'menu_title',
        'menu_sub_title',
        'url',
        'icons'
    ];
}
