<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ConfirmedShift;

class Role extends Model
{
    use HasFactory;
    
    protected $table = 'roles';
    
    public function confirmedshifts()
    {
        return $this->hasMany(ConfirmedShift::class);
    }
}
