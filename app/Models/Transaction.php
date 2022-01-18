<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventory_id',
        'buyer_id',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'datetime:d/m/Y', // Change your format
    ];

    public function inventories()
    {
        return $this->belongsToMany(Inventory::class, 'inventory_id');
    }

    public function buyers()
    {
        return $this->belongsToMany(Buyer::class, 'buyer_id');
    }
}
