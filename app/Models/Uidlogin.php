<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uidlogin extends Model
{
    use HasFactory;
    protected $table = 'uidlogin';
    protected $primaryKey = 'id';
}
