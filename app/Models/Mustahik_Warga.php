<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mustahik_Warga extends Model
{
    use HasFactory;
    protected $table = 'mustahik_warga';
    protected $guarded = [];
    public $timestamps = false;
}

