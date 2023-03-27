<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmedShift extends Model
{
    use HasFactory;
    
    protected $table = 'comfirmed_shifts';
    
    protected $fillable = [
        'role_id',
        'date',
        'start',
        'finish'
    ];
}
