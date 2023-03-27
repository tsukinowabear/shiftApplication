<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesiredShift extends Model
{
    use HasFactory;
    
    protected $table = 'desired_shifts';
    
    protected $fillable = [
        'date',
        'start',
        'finish'
    ];
    
    public function getByLimit(int $limit_count = 10)
    {
        return $this->orderBy('date','ASC')->limit($limit_count)->get();
    }
}
