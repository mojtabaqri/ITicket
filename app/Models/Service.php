<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    /* Service
           id: id
           service_category_id: bigInteger
           Service_state_location_id: bigInteger foreign:state_location.id
           service_name: string
           service_price: bigInteger
           service_description: text
           service_banner: string
           service_status: Enums:"active","not_active","pending"
     */
    protected $fillable = [
        'service_category',
        'Service_state_location_id',
        'service_name',
        'service_price',
        'service_description',
        'service_banner',
        'service_status',
    ];
    use HasFactory;

    public function category(): HasMany
    {
        return $this->hasMany(ServiceCategory::class,'parent_id');
    }
    public function location(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(StateLocation::class,'id');
    }

}
