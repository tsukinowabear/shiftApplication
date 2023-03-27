<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkedShift extends Model
{
    use HasFactory;
    
    protected $table = 'worked_shifts';
    
    protected $fillable = [
        'date',
        'start',
        'finish'
    ];
}
