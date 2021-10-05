<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    use HasFactory;

    protected $table = 'pendonor';
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
        'usia',
        'status_donor',
        'berat_badan'

    ];
}
