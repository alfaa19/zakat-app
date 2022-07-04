<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayarzakat extends Model
{
    use HasFactory;
    protected $table = 'bayarzakat';
    protected $guarded = [];
    public $timestamps = false;
}
