<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armada extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'plat',
        'picture_url'
    ];

    public function latestTransaction()
    {
        return $this->hasOne(transaction::class, 'transaction_id','id')->latestOfMany();
    }



}
