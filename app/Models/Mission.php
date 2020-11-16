<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'customer_id',
    ];

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    public function bills()
    {
        return $this->hasMany(Bill::class);
    }

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }

}
