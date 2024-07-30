<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    
    protected $table = 'table_users';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
    ];
}
