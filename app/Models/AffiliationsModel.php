<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class affiliations extends Model
{
    use HasFactory;
    protected $table ="affillations";
    protected $fillable = ['user_id', 'date_from', 'date_to', 'details'];
}
