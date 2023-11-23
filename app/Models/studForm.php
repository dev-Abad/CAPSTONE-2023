<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studForm extends Model
{
    use HasFactory;
    
    protected $table = "stud_forms";

    protected $fillable = [
        'fname',
        'midname',
        'lname',
        'userid',
        'dep',
    ];
}
