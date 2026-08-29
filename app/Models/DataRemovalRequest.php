<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRemovalRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'reason',
        'status',
    ];
}
