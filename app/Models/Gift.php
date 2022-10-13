<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;
    protected $fillable = ['price', 'amount', 'type', 'id_user'];
    public $timestamps = false;
}
