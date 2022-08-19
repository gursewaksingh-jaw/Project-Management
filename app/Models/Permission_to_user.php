<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission_to_user extends Model
{
    use HasFactory;
    public $fillable = [
        'roles_id',
        'gaurd_name',
        'permission_id'

    ];
}