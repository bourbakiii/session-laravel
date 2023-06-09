<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'student',
        'object',
        'mark'
    ];
}
