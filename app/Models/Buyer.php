<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kelas'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_id');
    }

    public function transactions()
    {
        return $this->hasMany(Buyer::class);
    }
}
