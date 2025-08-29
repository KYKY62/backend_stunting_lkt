<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stunting extends Model
{
    use HasFactory;
    protected $table = 'stunting';
    protected $fillable = [
        'id_user',
        'kecamatan',
        'jumlah_stunting',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
