<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config_Sympozia extends Model
{
    public $timestamps = false;
    protected $table = 'sympozia_config';
    use HasFactory;
}