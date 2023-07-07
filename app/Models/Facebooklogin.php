<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facebooklogin extends Model
{
    use HasFactory;
    protected $table = 'facebooklogin';
    protected $primaryKey = 'id';
}
