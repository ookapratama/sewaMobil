<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'armada_id',
        'start_date',
        'end_date',
        'alamat',
        'no_telp',
        'durasi_sewa',
        'pengantaran',
        'dp_invoice',
        'ktp',
        'sim',
    ];

    public function armada()
    {
        return $this->belongsTo(Armada::class, 'armada_id', 'id');
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id','id');
    // }
}
