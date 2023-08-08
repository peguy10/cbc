<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotisation extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function periode()
    {
        return $this->belongsTo(Periode::class, 'periode_id', 'id');
    }
}
