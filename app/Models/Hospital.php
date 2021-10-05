<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $table = "hospitals";
    public $timestamps = false;

    protected $fillable = [
        'name_hospital',
        'phone_hospital',
        'wa_hospital',
        'email_hospital',
        'operation_info_hospital',
        // 'address_hospital',
        'link_maps_hospital',
        'longitude',
        'latitude',
        'id_province',
        'id_regency',
        'id_district',
        'id_village',
        'stok_plasdar'
    ];

    /**
     * Get the user that owns the Hospital
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province()
    {
        return $this->belongsTo(Provinces::class, 'id_province');
    }

    public function regency()
    {
        return $this->belongsTo(Regencies::class, 'id_regency');
    }

    public function district()
    {
        return $this->belongsTo(Districts::class, 'id_district');
    }

    public function village()
    {
        return $this->belongsTo(Village::class, 'id_village');
    }
}
