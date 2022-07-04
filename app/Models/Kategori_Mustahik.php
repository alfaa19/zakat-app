<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Mustahik extends Model
{
    use HasFactory;
    protected $table = 'kategori_mustahik';
    protected $guarded = [];
    public $timestamps = false;
}
