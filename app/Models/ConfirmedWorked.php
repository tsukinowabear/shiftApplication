<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmedWorked extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'confirmed_worked';
    
    protected $fillable = [
        'confirmed_id',
        'worked_id',
    ]
}
