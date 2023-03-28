<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmedDesired extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'confirmed_desired';
    
    protected $fillable = [
        'confirmed_id',
        'desired_id',
    ]
}
