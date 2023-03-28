<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Role;

class ConfirmedShift extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'confirmed_shifts';
    
    protected $fillable = [
        'role_id',
        'date',
        'start',
        'finish'
    ];
    
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    
    public function getByLimit(int $limit_count = 10)
    {
        return $this::with('role')->orderBy('date','ASC')->limit($limit_count)->get();
    }
}
