<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'faculty_code',
        'faculty_name',
    ];

    public function price()
    {
        return $this->hasMany(Price::class);
    }
}
