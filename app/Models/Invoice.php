<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'price', 'date', 'supplier_id'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
