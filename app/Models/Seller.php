<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_number',
        'user_name_page',
        'f_name',
        'l_name',
        'address',
        'n_code'
    ];
}
