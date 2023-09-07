<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    use HasFactory;

    protected $fillable = ['cargo','escuela_id','user_id'];

    public function escuela()
    {
        return $this->belongsTo(Escuela::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }
}
