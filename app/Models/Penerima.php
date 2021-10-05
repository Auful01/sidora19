<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;

    protected $table = 'penerima';
    protected $primaryKey = 'id';

    protected $fillable = [
        'nama',
        'email',
        'phone',
        'gender',
        'status_cov',
        'tgl_lahir',
        'positif',
        'negatif',
        'alamat',
    ];
}
