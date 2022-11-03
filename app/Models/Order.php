<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customer_name', 'description', 'telephone', 'money_up_front', 'cost', 'delivery'];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
