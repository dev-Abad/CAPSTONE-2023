<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prof_Form_Model extends Model
{
    use HasFactory;

    protected $table = "prof_forms";

    protected $fillable = [
        'fname',
        'midname',
        'lname',
        'userid',
        'dep',
    ];
}
