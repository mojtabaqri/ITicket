<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        service_status: enum:"active","not_active","pending"
  */

    use HasFactory;
}
