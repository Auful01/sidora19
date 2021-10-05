<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;
    protected $table = 'villages';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'district_id',
        'name'
    ];

    public function district()
    {
        return $this->belongsTo(Districts::class, 'district_id');
    }
}
